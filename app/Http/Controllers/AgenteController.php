<?php

namespace App\Http\Controllers;

use App\Models\Agente;
use Illuminate\Http\Request;

class AgenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agentes = Agente::paginate('15');        
        return view('usuarios.agentes.index', compact('agentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agentes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rol_id' => 'required',
            'departamento'=> 'required',
            'rfc'=> 'required',
            'nombre'=> 'required|max:60',
            'correo'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required',
            'extension',
            'entidad'=> 'required',
            'municipio'=> 'required',
            'estado',
            'created_at',
            'updated_at',
        ]);

        Agente::create($request->all()); 
        return redirect()->route('agentes.index')
        ->with('success', 'Agente creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agentes = Agente::find($id);
        return view('usuarios.agentes.show', compact('agentes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agentes = Agente::find($id);
        return view('usuarios.agentes.edit', compact('agentes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agente $agente)
    {
        $request->validate([
            'rol_id',
            'departamento'=> 'required',
            'rfc'=> 'required',
            'nombre'=> 'required|max:60',
            'correo'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required',
            'extension',
            'entidad'=> 'required',
            'municipio'=> 'required',
            'estado',
            'created_at',
            'updated_at',
        ]);

        $agente->update($request->all());
        return redirect()->route('agentes.index')
        ->with('success', 'Agente actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agente $agente)
    {
        $agente->delete();
        return redirect()->route('agentes.index')
        ->with('success','Agente eliminado exitosamente');
    }
}