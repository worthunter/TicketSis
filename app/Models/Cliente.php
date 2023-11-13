<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
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
        'created_at',
        'update_at',
    ];
}
