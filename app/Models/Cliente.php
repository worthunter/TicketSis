<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'rol_id',
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
        'updated_at',
    ];
    public function ticket(){   //Relación 1:N clientes-tickets
        return $this->hasMany('App\Models\Ticket'); 
    }
}
