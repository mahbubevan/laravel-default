<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\Http\Controllers\Controller;
use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with('category')->get();

        return view('admin.ticket.tickets')->with([
            'tickets' => $tickets,
        ]);
    }

    public function create()
    {
        return view('admin.ticket.ticket_create');
    }
}
