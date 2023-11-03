<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $guarded =[
        'id',
        'agentes_id',
    ];
    protected $fillable = [
        'titulo',
        'age_asignado',
        'descripcion',
        'estado',
    ];

    public function Agente(){       //Relación 1:N agentes-tareas
        return $this->belongsTo('App\Agente');
    }
}
