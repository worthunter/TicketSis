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
        //Llaves foraneas
        'cliente_id',
        'agente_id',
        'categoria_id',
        'subestados_id',
        'departamento_id',
        //Campos generales
        'titulo', 
        'prioridad',
        'garantia',
        'descripcion',
        'estado',
        'notas',
        'fecha_asig',
        'vencimiento',
        'created_at',
        'updated_at',
        //Preventivo
        'prev_tipo',
        'prev_marca',
        'prev_modelo',
        'prev_serie',
        'prev_requiere',
        //Correctivo
        'corr_tipo',
        'corr_marca',
        'corr_modelo',
        'corr_serie',
        'corr_requiere',
        //Redes
        'red_tipo_servicio',
        'red_num_equipos',
        'red_compania',
        'red_requiere',
        //Software
        'soft_tipo_servicio',
        'soft_nombre',
        'soft_version',
        'soft_requiere',
        //CAS Brother
        'cas_caso',
        'cas_tipo_servicio',
        'cas_categoria',
        'cas_modelo',
        'cas_serie',
        'cas_compra',
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
    public function subestados(){     //Relación 1:N subestados-tickets
        return $this->belongsTo('App\Models\Subestado');
    }
    public function departamento(){     //Relación 1:N categoría-tickets
        return $this->belongsTo('App\Models\Departamento');
    }
}
