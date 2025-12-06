<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            ['name' => 'Laptops', 'description' => 'Ordenadores portátiles de diferentes marcas y modelos.'],
            ['name' => 'Periféricos', 'description' => 'Teclados, ratones, impresoras, auriculares y otros accesorios.'],
            ['name' => 'Componentes', 'description' => 'Tarjetas gráficas, procesadores, memorias y otros componentes internos.'],
            ['name' => 'Monitores', 'description' => 'Pantallas de distintos tamaños y resoluciones.'],
            ['name' => 'Redes', 'description' => 'Routers, switches, cables y todo lo relacionado con conectividad.'],
        ];

        foreach ($categorias as $categoria) {
            Category::create($categoria);
        }
    }
}
