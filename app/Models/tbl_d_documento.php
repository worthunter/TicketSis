<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_d_documento extends Model
{
    use HasFactory;

    /** 
    * Utilizar $fillable, $hidden y $casts es 
    * una medida de seguridad para evitar 
    * la vulnerabilidad de asignación masiva
    */
    
    protected $fillable = [
        'doc_id',
        'ticket_id',
        'doc_nom',
        'fecha_crea',
        'estado',
    ];
}
