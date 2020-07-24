<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\Http\Controllers\Controller;
use App\Ticket;
use App\TicketCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with('category')->paginate(15);
        $count = Ticket::count();

        return view('admin.ticket.tickets')->with([
            'tickets' => $tickets,
            'count' => $count,
        ]);
    }

    public function create()
    {
        $categories = TicketCategory::get(['id', 'title']);

        return view('admin.ticket.ticket_create')->with([
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $get_last_number = Ticket::get(['id', 'seat_number'])->last();

        if ($get_last_number == null) {
            for ($i = 1; $i <= $request->quantity; $i++) {
                $ticket = new Ticket();
                $ticket->ticket_category_id = $request->category;
                $ticket->seat_number = $i;
                $ticket->status = Ticket::AVAILABLE;
                $ticket->save();
            }

            return redirect()->back()->with('success', 'Tickets created');
        }

        $new_seat = $get_last_number->seat_number + 1;
        for ($i = 1; $i <= $request->quantity; $i++) {
            $ticket = new Ticket();
            $ticket->ticket_category_id = $request->category;
            $ticket->seat_number = $new_seat;
            $ticket->status = Ticket::AVAILABLE;
            $ticket->save();

            $new_seat += 1;
        }

        return redirect()->back()->with('success', 'Tickets created');
    }

    public function destroy()
    {
        Ticket::truncate();

        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
