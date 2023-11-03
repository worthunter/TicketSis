<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'rol_id',
    ];
    protected $fillable = [
        'empresa',
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
    ];

    public function tarea() {        //Relación 1:N agentes-tareas
        return $this->hasMany('App\Tarea'); 
    }     
}
