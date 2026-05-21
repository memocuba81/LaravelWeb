<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosSeeder extends Seeder
{
    public function run(): void
    {

        $productos = [

            // MÓVILES

            [
                'nombre'=>'iPhone 15 Pro',
                'precio'=>'1.299€',
                'imagen'=>'images/products/iphone15pro.jpg',
                'categoria'=>'moviles',
                'badge'=>'Top',
                'descripcion'=>'El móvil más potente de Apple.',
                'marca'=>'Apple',
                'stock'=>8,
            ],

            [
                'nombre'=>'Samsung Galaxy S25',
                'precio'=>'1.199€',
                'imagen'=>'images/products/galaxy-s25.jpg',
                'categoria'=>'moviles',
                'badge'=>'Nuevo',
                'descripcion'=>'Potencia Android premium.',
                'marca'=>'Samsung',
                'stock'=>12,
            ],

            [
                'nombre'=>'Xiaomi 15 Pro',
                'precio'=>'599€',
                'imagen'=>'images/products/xiaomi-15pro.jpg',
                'categoria'=>'moviles',
                'badge'=>'Nuevo',
                'descripcion'=>'Potente.',
                'marca'=>'Xiaomi',
                'stock'=>15,
            ],

            // GAMING

            [
                'nombre'=>'Razer Huntsman V3',
                'precio'=>'249€',
                'imagen'=>'images/products/huntsman-v3.jpg',
                'categoria'=>'gaming',
                'badge'=>'Gaming',
                'descripcion'=>'Teclado gaming RGB profesional.',
                'marca'=>'Razer',
                'stock'=>6,
            ],

            [
                'nombre'=>'Monitor LG UltraGear',
                'precio'=>'249€',
                'imagen'=>'images/products/monitor-4k.jpg',
                'categoria'=>'gaming',
                'badge'=>'Gaming',
                'descripcion'=>'Monitor gaming de alta gama.',
                'marca'=>'LG',
                'stock'=>4,
            ],

            [
                'nombre'=>'Silla gaming DXRacer',
                'precio'=>'149€',
                'imagen'=>'images/products/silla-gaming.jpg',
                'categoria'=>'gaming',
                'badge'=>'Gaming',
                'descripcion'=>'Silla gaming ergonómica.',
                'marca'=>'DXRacer',
                'stock'=>10,
            ],

            // SONIDO

            [
                'nombre'=>'Sony WH-1000XM5',
                'precio'=>'399€',
                'imagen'=>'images/products/sony-wh1000xm5.jpg',
                'categoria'=>'sonido',
                'badge'=>'Top',
                'descripcion'=>'Auriculares con cancelación de ruido líder.',
                'marca'=>'Sony',
                'stock'=>9,
            ],

            [
                'nombre'=>'JBL Charge 5',
                'precio'=>'189€',
                'imagen'=>'images/products/jbl-charge5.jpg',
                'categoria'=>'sonido',
                'badge'=>'Oferta',
                'descripcion'=>'Altavoz portátil potente y resistente.',
                'marca'=>'JBL',
                'stock'=>11,
            ],

            [
                'nombre'=>'AirPods Pro 2',
                'precio'=>'189€',
                'imagen'=>'images/products/airpods-pro.jpg',
                'categoria'=>'sonido',
                'badge'=>'Oferta',
                'descripcion'=>'Auriculares premium Apple.',
                'marca'=>'Apple',
                'stock'=>14,
            ],

            // ORDENADORES

            [
                'nombre'=>'MacBook Pro M4',
                'precio'=>'2.499€',
                'imagen'=>'images/products/macbook-m4.jpg',
                'categoria'=>'ordenadores',
                'badge'=>'Top',
                'descripcion'=>'Portátil profesional de Apple.',
                'marca'=>'Apple',
                'stock'=>5,
            ],

            [
                'nombre'=>'ASUS ROG Strix',
                'precio'=>'1.899€',
                'imagen'=>'images/products/asus-rog.jpg',
                'categoria'=>'ordenadores',
                'badge'=>'Gaming',
                'descripcion'=>'Portátil gaming de alto rendimiento.',
                'marca'=>'ASUS',
                'stock'=>7,
            ],

            [
                'nombre'=>'Lenovo Legion 5',
                'precio'=>'899€',
                'imagen'=>'images/products/lenovo-legion.jpg',
                'categoria'=>'ordenadores',
                'badge'=>'Gaming',
                'descripcion'=>'Portátil de buen rendimiento.',
                'marca'=>'Lenovo',
                'stock'=>13,
            ],

        ];

        foreach ($productos as $producto) {

            Producto::create($producto);

        }

    }
}
