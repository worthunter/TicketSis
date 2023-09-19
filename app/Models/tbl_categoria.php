<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_categoria extends Model
{
    use HasFactory;

    /** 
    * Utilizar $fillable, $hidden y $casts es 
    * una medida de seguridad para evitar 
    * la vulnerabilidad de asignación masiva
    */

    /** $fillable --- The attributes that are mass assignable. */
    protected $fillable = [
        'cat_id',
        'cat_nom',
        'estado',
    ];

    /** $hidden --- The attributes that should be hidden for serialization. */
    protected $hidden = [
    ];

    /** $casts --- The attributes that should be cast. */
    protected $casts = [
    ];
}
