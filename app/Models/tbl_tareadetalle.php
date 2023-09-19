<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_tareadetalle extends Model
{
    use HasFactory;

    /** 
    * Utilizar $fillable, $hidden y $casts es 
    * una medida de seguridad para evitar 
    * la vulnerabilidad de asignación masiva
    */

    protected $fillable = [
        'taread_id',
        'tarea_id',
        'id_usuario',
        'taread_descrip',
        'fecha_crea',
        'estado',
    ];
}
