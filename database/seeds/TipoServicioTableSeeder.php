<?php

use Illuminate\Database\Seeder;
use \App\TipoServicio;

class TipoServicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoServicio::truncate();

        $tipoServicio = new TipoServicio;
        $tipoServicio->nombre = 'Hotel';
        $tipoServicio->save();

        $tipoServicio = new TipoServicio;
        $tipoServicio->nombre = 'Restaurante';
        $tipoServicio->save();

        $tipoServicio = new TipoServicio;
        $tipoServicio->nombre = 'Guia Turistico';
        $tipoServicio->save();

    }
}
