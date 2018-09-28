<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Servicio extends Model
{
    protected $fillable = [
        'nombre','direccion', 'breve_descripcion', 'descripcion','telefono','telefono_2','imagen','id_tipoServicio','id_usuario','foto_sitio','id_tipoRestaurante'
    ];

    public function servicios(){

        return $this->belongsToMany(User::class,'empr_serv','id_servicio','id_usuario');
    }
    public function tipoServicio(){
        return $this->belongsTo(TipoServicio::class,'id_tipoServicio');
    }
    public function tipoRestaurante(){
        return $this->belongsTo(TipoRestaurante::class,'id_tipoRestaurante');
    }
}
