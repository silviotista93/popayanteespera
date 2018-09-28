<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','apellidos', 'email', 'password','telefono','telefono_2','foto'
    ];

    public function Todosservicios(){

        return $this->belongsToMany(User::class,'empr_serv','id_servicio','id_usuario');
    }
    public function usuarioServicios(){
        return $this->hasMany(Servicio::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
