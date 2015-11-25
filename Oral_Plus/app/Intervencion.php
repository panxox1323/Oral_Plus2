<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Intervencion extends Model
{
    protected $fila = 'intercenciones';

    protected $fillable = ['fecha', 'estado', 'id_consulta', 'id_tratamiento'];



    
    public function consulta()
    {
        return $this->belongsTo('Oral_Plus\Consulta', 'id_consulta', 'id');
    }

    public function hora()
    {
        return $this->hasMany('Oral_Plus\Horas');
    }



    public function tratamiento()
    {
        return $this->belongsTo('Oral_Plus\tratamiento', 'id_tratamiento', 'id');
    }

    public function detalle_insumos()
    {
        return $this->hasMany('Oral_Plus/Detalle_Insumo');
    }

    public function scopeFiltrar($query)
    {

    }
}
