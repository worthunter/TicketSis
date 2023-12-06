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
            //Llaves foraneas
            'cliente_id'=> 'required',
            'agente_id'=> 'required',
            'categoria_id'=> 'required',
            'subestados_id'=> 'required',
            'departamento_id'=> 'required',
            //Datos generales
            'titulo'=> 'max:100',
            'prioridad'=> 'required',
            'garantia'=> 'required',
            'descripcion',
            'estado'=> 'required',
            'notas',
            'fecha_asig',
            'vencimiento',
            //Preventivo
            'prev_tipo'=> 'max:50',
            'prev_marca'=> 'max:50',
            'prev_modelo'=> 'max:50',
            'prev_serie'=> 'max:50',
            'prev_requiere'=> 'max:80',
            //Correctivo
            'corr_tipo'=> 'max:50',
            'corr_marca'=> 'max:50',
            'corr_modelo'=> 'max:50',
            'corr_serie'=> 'max:50',
            'corr_requiere'=> 'max:80',
            //Redes
            'red_tipo_servicio'=> 'max:50',
            'red_num_equipos'=> 'max:3',
            'red_compania'=> 'max:80',
            'red_requiere'=> 'max:80',
            //Software
            'soft_tipo_servicio'=> 'max:80',
            'soft_nombre'=> 'max:80',
            'soft_version'=> 'max:80',
            'soft_requiere'=> 'max:80',
            //CAS Brother
            'cas_caso',
            'cas_tipo_servicio'=> 'max:80',
            'cas_categoria'=> 'max:40',
            'cas_modelo'=> 'max:80',
            'cas_serie'=> 'max:80',
            'cas_compra',
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
            //Llaves foraneas
            'cliente_id'=> 'required',
            'agente_id'=> 'required',
            'categoria_id'=> 'required',
            'subestados_id'=> 'required',
            'departamento_id'=> 'required',
            //Datos generales
            'titulo'=> 'max:100',
            'prioridad'=> 'required',
            'garantia'=> 'required',
            'descripcion',
            'estado'=> 'required',
            'notas',
            'fecha_asig',
            'vencimiento',
            'created_at',
            'updated_at',
            //Preventivo
            'prev_tipo'=> 'max:50',
            'prev_marca'=> 'max:50',
            'prev_modelo'=> 'max:50',
            'prev_serie'=> 'max:50',
            'prev_requiere'=> 'max:80',
            //Correctivo
            'corr_tipo'=> 'max:50',
            'corr_marca'=> 'max:50',
            'corr_modelo'=> 'max:50',
            'corr_serie'=> 'max:50',
            'corr_requiere'=> 'max:80',
            //Redes
            'red_tipo_servicio'=> 'max:50',
            'red_num_equipos'=> 'max:3',
            'red_compania'=> 'max:80',
            'red_requiere'=> 'max:80',
            //Software
            'soft_tipo_servicio'=> 'max:80',
            'soft_nombre'=> 'max:80',
            'soft_version'=> 'max:80',
            'soft_requiere'=> 'max:80',
            //CAS Brother
            'cas_caso',
            'cas_tipo_servicio'=> 'max:80',
            'cas_categoria'=> 'max:40',
            'cas_modelo'=> 'max:80',
            'cas_serie'=> 'max:80',
            'cas_compra',
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
