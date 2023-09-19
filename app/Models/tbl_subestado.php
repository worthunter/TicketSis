<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_subestado extends Model
{
    use HasFactory;

    /** 
    * Utilizar $fillable, $hidden y $casts es 
    * una medida de seguridad para evitar 
    * la vulnerabilidad de asignación masiva
    */

    protected $fillable = [
        'id_subestados',
        'nom_subestados',
        'estado',
    ];
}
