<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'nombre',
    ];

    public function user(){ //Relación 1:N Role User
        return $this->hasMany('App/Models/User');
    }
}
