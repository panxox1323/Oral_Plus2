<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Detalle_Insumo extends Model
{
    protected $fila = 'detalle_insumos';

    protected $fillable = ['id_intervencion', 'id_insumo', 'cantidad', 'fecha'];


    public function intervencion()
    {
        return $this->belongsTo('Oral_Plus/Intervencion', 'id_intervencion', 'id');
    }

    public function insumo()
    {
        return $this->belongsTo('Oral_Plus/Insumo', 'id_insumo', 'id');
    }
}
