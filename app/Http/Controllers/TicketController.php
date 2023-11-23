<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()  
    {
        $tickets = Ticket::paginate('15');        
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo'=> 'required|max:100',
            'garantia'=> 'required',
            'sub_estados'=> 'required',
            'ticket_descrip'=> 'required|max:300',
            'ticket_estado',
            'age_asig'=> 'required',
            'estado'=> 'required',
            'notas'=> 'required',
            'created_at',
            'updated_at',
        ]);

        Ticket::create($request->all());
        return redirect()->route('tickets.index')
        ->with('success', 'Ticket creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tickets = Ticket::find($id);
        return view('tickets.show', compact('tickets'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tickets = Ticket::find($id);
        return view('tickets.edit', compact('tickets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'titulo'=> 'required|max:100',
            'garantia'=> 'required',
            'sub_estados'=> 'required',
            'ticket_descrip'=> 'required|max:300',
            'ticket_estado',
            'age_asig'=> 'required',
            'estado'=> 'required',
            'notas'=> 'required',
            'created_at',
            'updated_at',
        ]);

        $ticket->update($request->all());
        return redirect()->route('tickets.index')
        ->with('success','Ticket actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')
        ->with('success','Ticket eliminado exitosamente');
    }
}
