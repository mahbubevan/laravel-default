<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\BookingTicket;
use App\Http\Controllers\Controller;
use App\Ticket;
use App\TicketCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = BookingTicket::with('category')->get();
        $count = BookingTicket::count();
        // dd($bookings->first());
        return view('admin.ticket.booking')->with([
            'bookings' => $bookings,
            'count' => $count,
        ]);
    }

    public function create()
    {
        $categories = TicketCategory::get(['id', 'title']);

        return view('admin.ticket.booking_create')->with([
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'quantity' => 'required|integer|min:1|max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $tickets = Ticket::with('category')->where('ticket_category_id', $request->category)
            ->where('status', Ticket::AVAILABLE)->get();

        $available = $tickets->count();

        if ($available <= 0 || $available < $request->quantity) {
            return redirect()->back()->with('error', "$request->quantity Tickets Not Available");
        }

        $seat_numbers = " ";

        $booking = new BookingTicket();
        $booking->name = $request->name;
        $booking->phone = $request->phone;
        $booking->email = $request->email;
        $booking->quantity = $request->quantity;
        $booking->vouchar_id = Str::random(12);
        $booking->ticket_category_id = $request->category;
        $booking->price = $request->quantity * $tickets->first()->category->price;

        foreach ($tickets->take($request->quantity) as $ticket) {
            $seat_numbers .= $ticket->seat_number;
            $seat_numbers .= ",";
            $booked_seat = Ticket::where('seat_number', $ticket->seat_number)->first();
            $booked_seat->status = Ticket::NOT_AVAILABLE;
            $booked_seat->save();
        }
        $booking->seat_numbers = $seat_numbers;
        $booking->save();

        return redirect()->back()->with('success', 'Purchased Successfully');
    }
}
