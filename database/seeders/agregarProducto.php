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
                'nombre' => 'Patines Fitness',
                'descripcion' => 'Patines en Línea Fitness Morado Hook HK-110',
                'imagen' => 'https://cdn.shopify.com/s/files/1/1629/6545/products/IMG_0016_1_1x1_1_1200_x_1200_500x.jpg?v=1628525938',
                'categoria_id' => 1
            ],
            [
                'nombre' => 'Llavero Allen',
                'descripcion' => 'Llavero Allen 6 Piezas de 2 a 7mm',
                'imagen' => 'https://cdn.shopify.com/s/files/1/1629/6545/products/LlaveroAllen6Piezasde2a7mm_500x.jpg?v=1653844542',
                'categoria_id' => 4
            ],
            [
                'nombre' => 'Rodilleras Miltisport',
                'descripcion' => 'Rodillera Multisport OnWheels! Negras',
                'imagen' => 'https://cdn.shopify.com/s/files/1/1629/6545/products/RodilleraMultisportOnwheels1_500x.webp?v=1652798536',
                'categoria_id' => 3
            ],
            [
                'nombre' => 'Set de Ruedas',
                'descripcion' => 'Ruedas Hurricane Rojas 76MM Powerslide',
                'imagen' => 'https://cdn.shopify.com/s/files/1/1629/6545/products/905194_76_PS_HURRICANE_wheels_red_2020_view1_500x.jpg?v=1605817156',
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