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
            /*'nombre'=> 'required',
            'apellido'=> 'required',
            'rfc'=> 'required',
            'correo'=> 'required',
            'telefono'=> 'required',
            'departamento'=> 'required',
            'extension'=> 'required',
            'entidad'=> 'required',
            'municipio'=> 'required',
            'direccion'=> 'required',
            'rol_id'=> 'required',
            'estado'=> 'required',*/
            
            'nombre' => 'required|max:60',
            'apellido' => 'required|max:60',
            'rfc' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'departamento' => 'required',
            'extension',
            'entidad' => 'required',
            'municipio' => 'required',
            'direccion' => 'required',
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
            'nombre'=> 'required',
            'apellido'=> 'required',
            'rfc'=> 'required',
            'correo'=> 'required',
            'telefono'=> 'required',
            'departamento'=> 'required',
            'extension'=> 'required',
            'entidad'=> 'required',
            'municipio'=> 'required',
            'direccion'=> 'required',
            
            /*
            'extension',
            'departamento' => 'required',
            'nombre' => 'required|max:60',
            'apellido' => 'required|max:60',
            'correo' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required',
            'municipio' => 'required',
            'entidad' => 'required',
            'rfc' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',*/
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