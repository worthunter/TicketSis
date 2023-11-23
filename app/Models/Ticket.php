<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        
    ];
    protected $fillable = [
        'cliente_id',
        'age_id',
        'titulo',
        'garantia',
        'sub_estados',
        'ticket_descrip',
        'ticket_estado',
        'age_asig',
        'estado',
        'notas',
        'created_at',
        'updated_at',
    ];
    public function agente(){     //Relación 1:N agentes-tickets
        return $this->belongsTo('App\Models\Agente');
    }
    public function cliente(){     //Relación 1:N clientes-tickets
        return $this->belongsTo('App\Models\Cliente');
    }
    public function categoria(){     //Relación 1:N categoría-tickets
        return $this->belongsTo('App\Models\Categoria');
    }
}
