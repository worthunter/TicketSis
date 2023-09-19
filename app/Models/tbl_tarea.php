<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_tarea extends Model
{
    use HasFactory;

    /** 
    * Utilizar $fillable, $hidden y $casts es 
    * una medida de seguridad para evitar 
    * la vulnerabilidad de asignación masiva
    */

    protected $fillable = [
        'tarea_id',
        'id_usuarios',
        'tipo_c_id',
        'tarea_titulo',
        'nom_usu',
        'usu_asignado',
        'tarea_descripcion',
        'tarea_estado',
        'fecha_crea',
        'estado',
    ];
}
