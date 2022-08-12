<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class agregarStock extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stock_precio')->insert(array(
            [
                'stock' => '10',
                'descripcion' => 'patines rapidicimos',
                'precio' => '59000',
                'codigo' => '45684213',
                'producto_id' => '1',
                'sucursal_id' => '1'
            ],
            [
                'stock' => '10',
                'descripcion' => 'para apretar los tornillitos',
                'precio' => '39000',
                'codigo' => '73738242',
                'producto_id' => '2',
                'sucursal_id' => '1'
            ],
            [
                'stock' => '10',
                'descripcion' => 'para no rasparse las rodillas cuando te caes',
                'precio' => '69000',
                'codigo' => '453734',
                'producto_id' => '3',
                'sucursal_id' => '2'
            ],
            [
                'stock' => '10',
                'descripcion' => 'rueditas redondas y bonitas',
                'precio' => '89000',
                'codigo' => '85686786',
                'producto_id' => '4',
                'sucursal_id' => '3'
            ]
            ));
    }
}
