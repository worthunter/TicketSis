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
            'empresa' => 'required',
            'rfc' => 'required',
            'nombre' => 'required',
            'appelido' => 'required',
            'correo' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'entidad' => 'required',
            'municipio' => 'required',
        ]);
        
        Cliente::create($request->all()); 
        return redirect()->route('clientes.index')
        ->with('success', 'Cliente creadeo exitosamente.');
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
        return view('usuarios.clientes.edit', compact('clientes'));     //Arreglar la ruta clientes.index para mandar a editar el cliente
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required|max:60',
            'apellido' => 'required|max:60',
            'email' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required',
            'municipio' => 'required',
            'entidad' => 'required',
            'rfc' => 'required',
            'empresa' => 'required',
            'created_at' => 'required',
            'update_at' => 'required',
        ]);

        $cliente->update($request->all());
        return redirect()->route('clientes.index')
        ->with('success', 'Cliente actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(string $id)
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index')
        ->with('success','Cliente eliminado exitosamente');

        /*
        $clientes = Cliente::find($id);
        $clientes->delete();
        return redirect()->route('clientes.index');
        */
    }
}
