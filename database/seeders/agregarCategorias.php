<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class agregarCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert(array(
            [
                'tipo' => 'Patines'
            ],
            [
                'tipo' => 'Repuesto'
            ],
            [
                'tipo' => 'Seguridad'
            ],
            [
                'tipo' => 'Accesorios'
            ]
            ));
    }
}
