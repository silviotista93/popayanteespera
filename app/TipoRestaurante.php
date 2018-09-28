<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoRestaurante extends Model
{
    public function sitioTipoRestaurante(){

        return $this->hasMany(Servicio::class);
    }

}
