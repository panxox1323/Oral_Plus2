<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $table = 'insumos';

    protected $fillable = ['nombre', 'precio_unitario', 'descripcion'];


    public function detalle_compra()
    {
        return $this->hasMany('Oral_Plus\detalle_Compra');
    }

    public function detalle_insumo()
    {
        return $this->hasMany('Oral_Plus/Detalle_Insumo');
    }


    public function scopeNombre($query, $nombre)
    {
        if(trim($nombre) != ""){
            $query->where('nombre',"LIKE", "%$nombre%");
        }
    }
}
