<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class agregarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursal')->insert(array(
            [
                'nombre' => 'Puente Alto',
                'direccion' => 'av.Concha y Toro 1744'
            ],
            [
                'nombre' => 'La Florida',
                'direccion' => 'av.Walker Martinez 2011'
            ],
            [
                'nombre' => 'Providencia',
                'direccion' => 'av.Los Leones 380'
            ]
            ));
    }
}
