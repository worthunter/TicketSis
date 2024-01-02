<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
/*
    public function index()
    {
        $users = User::paginate('15');        
        return view('usuarios.agentes.index', compact('agentes'));
    }

    public function create()
    {
        return view('agentes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rol_id' => 'required',
            'departamento'=> 'required',
            'rfc'=> 'required|max:13',
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

        User::create($request->all()); 
        return redirect()->route('agentes.index')
        ->with('success', 'Agente creado exitosamente.');
    }

    public function show(string $id)
    {
        $agentes = User::find($id);
        return view('usuarios.agentes.show', compact('agentes'));
    }

    public function edit(string $id)
    {
        $agentes = User::find($id);
        return view('usuarios.agentes.edit', compact('agentes'));
    }

    public function update(Request $request, User $agente)
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

    public function destroy(User $agente)
    {
        $agente->delete();
        return redirect()->route('agentes.index')
        ->with('success','Agente eliminado exitosamente');
    }
*/
}
