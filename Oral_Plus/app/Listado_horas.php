<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Listado_horas extends Model
{
    protected $table    = 'listado_horas';

    protected $fillable = ['hora_inicio', 'hora_termino', 'duracion'];

}
