<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class agregarProducto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert(array(
            [
                'nombre' => 'Patines',
                'categoria_id' => 1
            ],
            [
                'nombre' => 'destornillador',
                'categoria_id' => 4
            ],
            [
                'nombre' => 'rodilleras',
                'categoria_id' => 3
            ],
            [
                'nombre' => 'set de ruedas',
                'categoria_id' => 2
            ]
            ));
    }
}

/*public function run()
    {
        for($i=1; $i <= 10; $i++){
            DB::table('producto')->insert(array(
                'nombre' => 'rueda'.$i,
                'precio' => $i * 10000
            ));
        }
        $this->command->info("Producto agregado con exito");
    }*/