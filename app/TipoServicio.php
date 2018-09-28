<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model
{
    public function sitioTipoSitio(){

        return $this->hasMany(Servicio::class);
    }
}
