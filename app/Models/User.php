<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'rol_id',
        'departamento_id',
        'nombre',
        'empresa',
        'email',
        'password',
        'rfc',
        'direccion',
        'telefono',
        'extension',
        'entidad',
        'municipio',
        'estado',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function departamento(){     //Relación 1:N departamento-user
        return $this->belongsTo('App\Models\Departamento');
    }
    public function role(){     //Relación 1:N departamento-user
        return $this->belongsTo('App\Models\Role');
    }
    public function ticket(){     //Relación 1:N departamento-user
        return $this->hasMany('App\Models\Ticket');
    }
}
