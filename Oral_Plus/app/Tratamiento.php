<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $table = 'tratamientos';

    protected $fillable = ['nombre_tratamiento', 'valor_tratamiento', 'duracion'];


    public function intervencion()
    {
        return $this->hasMany('Oral_Plus\Intervencion');
    }

    public function scopeNombre($query, $nombre)
    {
        if(trim($nombre) != "")
        {
            $query->where('nombre_tratamiento', 'LIKE', "%$nombre%");
        }
    }
}
