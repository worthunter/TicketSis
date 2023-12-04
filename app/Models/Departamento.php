<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'nombre',
    ];
    public function ticket(){   //Relación 1:N categorías-tickets
        return $this->hasMany('App\Models\Ticket'); 
    }
    public function tarea(){   //Relación 1:N categorías-tickets
        return $this->hasMany('App\Models\Tarea'); 
    }
}