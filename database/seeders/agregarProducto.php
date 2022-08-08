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
        for($i=1; $i <= 10; $i++){
            DB::table('producto')->insert(array(
                'nombre' => 'rueda'.$i,
                'precio' => $i * 10000
            ));
        }
        $this->command->info("Producto agregado con exito");
    }
}
