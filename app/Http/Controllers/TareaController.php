<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Tarea::paginate('15');        
        return view('tareas.index', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tareas.nuevatarea.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'agentes_id' => 'required',
            'titulo' => 'required|max:100',
            'descripcion' => 'required|max:300',
            'estado' => 'required',
        ]);

        Tarea::create($request->all());
        return redirect()->route('tareas.index')
        ->with('success', 'Tarea creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tareas = Tarea::find($id);
        return view('tareas.show', compact('tareas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tareas = Tarea::find($id);
        return view('tareas.edit', compact('tareas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarea $tareas)
    {
        $request->validate([
            'agentes_id' => 'required',
            'titulo' => 'required|max:100',
            'descripcion' => 'required|max:300',
            'estado' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);

        $tareas->update($request->all());
        return redirect()->route('tareas.index')
        ->with('success','Tarea actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tareas.index')
        ->with('success','Tarea eliminada exitosamente');
    }
}
