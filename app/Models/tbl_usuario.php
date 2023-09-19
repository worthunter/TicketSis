<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_usuario extends Model
{
    use HasFactory;
    protected $fillable =[
        'id_usuarios',
        'nom_usu',
        'ape_usu',
        'correo_usu',
        'contra_usu',
        'usuario',
        'rol_id',
        'direccion',
        'zona_horaria',
        'telefono_usu',
        'whatsapp',
        'extension',
        'entidad',
        'localidad',
        'municipio',
        'fecha_crea',
        'fecha_mod',
        'fecha_eli',
        'estado',
    ];
}
