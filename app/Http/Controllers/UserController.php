<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate('15');        
        return view('usuarios.users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rol_id' => 'required',
            'departamento_id',
            'empresa',
            'rfc'=> 'required|max:13',
            'nombre'=> 'required|max:100',
            'correo'=> 'required|max:100',
            'direccion'=> 'required|max:200',
            'telefono'=> 'required',
            'extension',
            'entidad'=> 'required',
            'municipio'=> 'required',
            'estado',
            'created_at',
            'updated_at',
        ]);

        User::create($request->all()); 
        return redirect()->route('usuarios.index')
        ->with('success', 'Usuario creado exitosamente.');
    }

    public function show(string $id)
    {
        $users = User::find($id);
        return view('usuarios.users.show', compact('users'));
    }

    public function edit(string $id)
    {
        $users = User::find($id);
        return view('usuarios.users.edit', compact('users'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'rol_id' => 'required',
            'departamento_id',
            'rfc'=> 'required',
            'nombre'=> 'required|max:100',
            'correo'=> 'required|max:100',
            'direccion'=> 'required|max:200',
            'telefono'=> 'required',
            'extension',
            'entidad'=> 'required',
            'municipio'=> 'required',
            'estado',
            'created_at',
            'updated_at',
        ]);

        $user->update($request->all());
        return redirect()->route('user.index')
        ->with('success', 'Usuario actualizado exitosamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','Usuario eliminado exitosamente');
    }
}
