<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::paginate('15');
        return view('usuarios.clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'empresa',
            'extension',
            'rfc' => 'required',
            'nombre' => 'required|max:60',
            'apellido' => 'required|max:60',
            'correo' => 'required|email',
            'direccion' => 'required',
            'telefono' => 'required',
            'entidad' => 'required',
            'municipio' => 'required',
        ]);

        Cliente::create($request->all()); 
        return redirect()->route('clientes.index')
        ->with('success', 'Cliente creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $clientes = Cliente::find($id);
        return view('usuarios.clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clientes = Cliente::find($id);
        return view('usuarios.clientes.edit', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'empresa',
            'extension',
            'nombre' => 'required|max:60',
            'apellido' => 'required|max:60',
            'correo' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required',
            'municipio' => 'required',
            'entidad' => 'required',
            'rfc' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);

        $cliente->update($request->all());
        return redirect()->route('clientes.index')
        ->with('success', 'Cliente actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')
        ->with('success','Cliente eliminado exitosamente');
    }
}