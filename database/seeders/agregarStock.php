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
                'precio' => '59000',
                'producto_id' => '1',
                'sucursal_id' => '1',
                'codigo' => '1001'
            ],
            [
                'stock' => '10', 
                'precio' => '39000',
                'producto_id' => '2',
                'sucursal_id' => '1',
                'codigo' => '1002'
            ],
            [
                'stock' => '10',
                'precio' => '69000',
                'producto_id' => '3',
                'sucursal_id' => '2',
                'codigo' => '2003'
            ],
            [
                'stock' => '10',
                'precio' => '89000',
                'producto_id' => '4',
                'sucursal_id' => '3',
                'codigo' => '3004'
            ]
            ));
    }
}
