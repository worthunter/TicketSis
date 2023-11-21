<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'cliente_id',
        'age_id',
    ];
    protected $fillable = [
        'titulo',
        'garantia',
        'sub_estados',
        'ticket_descrip',
        'ticket_estado',
        'age_asig',
        'estado',
        'notas',
        'fecha_asig',
    ];
}
