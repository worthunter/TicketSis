<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $guarded =[
        'id',
    ];
    protected $fillable = [
        'agente_id',
        'titulo',
        'descripcion',
        'estado',
        'notas',
    ];

    public function agente(){     //Relación 1:N agentes-tareas
        return $this->belongsTo('App\Models\Agente');
    }
}
