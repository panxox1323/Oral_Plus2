<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fila = 'consltas';

    protected $fillable = ['fecha', 'hora', 'estado', 'valor_consulta', 'id_usuario', 'id_especialista'];



    public function user()
    {
        return $this->belongsTo('Oral_Plus\User', 'id_usuario', 'id');
    }

    public function especialista()
    {
       return $this->belongsTo('Oral_Plus\User', 'id_especialista', 'id');
    }


    public function intervencion()
    {
        return $this->hasMany('Oral_Plus\Intervencion');
    }

    public function hora()
    {
        return $this->hasMany('Oral_Plus\Horas');
    }
}
