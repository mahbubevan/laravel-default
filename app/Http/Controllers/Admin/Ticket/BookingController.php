<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\BookingTicket;
use App\Http\Controllers\Controller;
use App\TicketCategory;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = BookingTicket::all();
        $count = BookingTicket::count();
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
        dd($request->all());
    }
}
