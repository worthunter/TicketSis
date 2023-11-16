<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'rol_id',
        'departamento',
        'rfc',
        'nombre',
        'apellido',
        'correo',
        'contra',
        'direccion',
        'telefono',
        'extension',
        'entidad',
        'municipio',
        'estado',
        'created_at',
        'updated_at',
    ];

    /*public function tarea() {        //Relación 1:N agentes-tareas
        return $this->hasMany('App\Tarea'); 
    } */    
}
