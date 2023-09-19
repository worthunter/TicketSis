<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_ticket extends Model
{
    use HasFactory;

    /** 
    * Utilizar $fillable, $hidden y $casts es 
    * una medida de seguridad para evitar 
    * la vulnerabilidad de asignación masiva
    */

    protected $fillable = [
        'ticket_id',
        'id_usuarios',
        'cat_id',
        'ticket_titulo',
        'garantia',
        'sub_estados',
        'nom_usu',
        'ape_usu',
        'correo_usu',
        'direccion',
        'telefono_usu',
        'whatsapp',
        'entidad',
        'localidad',
        'municipio',
        'ticket_descrip',
        'ticket_estado',
        'fecha_crea',
        'usu_asig',
        'fecha_asig',
        'fecha_cierre',
        'estado',
    ];
}
