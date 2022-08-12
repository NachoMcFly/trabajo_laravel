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
                'imagen' => 'https://cdn.shopify.com/s/files/1/1629/6545/products/1_4_1024x1024_2x_5f33b371-f676-4c1e-a1b7-deffdc3f186f_1024x.jpg?v=1630522669',
                'categoria_id' => 1
            ],
            [
                'nombre' => 'destornillador',
                'imagen' => 'https://www.fuzer.cl/wp-content/uploads/2020/07/c04eGDB.jpg',
                'categoria_id' => 4
            ],
            [
                'nombre' => 'rodilleras',
                'imagen' => 'https://www.kupfer.cl/media/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/r/o/rodillera_steelpro.jpg',
                'categoria_id' => 3
            ],
            [
                'nombre' => 'set de ruedas',
                'imagen' => 'https://www.alacalufe.cl/wp-content/uploads/2020/11/90mm..jpg',
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