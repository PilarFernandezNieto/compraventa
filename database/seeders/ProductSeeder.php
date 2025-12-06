<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $users = User::whereHas('role', function ($query) {
            $query->where('name', 'Administrador')->orWhere('name', 'Mantenedor');
        })->get();

        $products = [
            ['name' => 'Laptop Dell XPS 13', 'description' => 'Portátil ultraligero con procesador Intel i7 y 16GB RAM.', 'price' => 1200.00, 'quantity' => 10],
            ['name' => 'Laptop HP Spectre x360', 'description' => 'Portátil convertible con pantalla táctil y batería de larga duración.', 'price' => 1100.00, 'quantity' => 8],
            ['name' => 'Laptop MacBook Air M2', 'description' => 'Ultraportátil con chip Apple M2 y pantalla Retina.', 'price' => 1300.00, 'quantity' => 12],
            ['name' => 'Teclado Mecánico Corsair', 'description' => 'Teclado mecánico retroiluminado con switches Cherry MX.', 'price' => 100.00, 'quantity' => 25],
            ['name' => 'Teclado Logitech K380', 'description' => 'Teclado compacto inalámbrico para múltiples dispositivos.', 'price' => 40.00, 'quantity' => 30],
            ['name' => 'Ratón Logitech MX Master 3', 'description' => 'Ratón inalámbrico de alta precisión para productividad.', 'price' => 80.00, 'quantity' => 30],
            ['name' => 'Ratón Razer DeathAdder V2', 'description' => 'Ratón gaming ergonómico con sensor óptico de 20k DPI.', 'price' => 70.00, 'quantity' => 20],
            ['name' => 'Monitor LG 27" 4K', 'description' => 'Monitor de 27 pulgadas con resolución 4K y panel IPS.', 'price' => 350.00, 'quantity' => 15],
            ['name' => 'Monitor Samsung Odyssey 32"', 'description' => 'Monitor curvo para gaming con alta tasa de refresco.', 'price' => 450.00, 'quantity' => 10],
            ['name' => 'Tarjeta Gráfica NVIDIA RTX 4070', 'description' => 'GPU de última generación para gaming y renderizado.', 'price' => 700.00, 'quantity' => 8],
            ['name' => 'Tarjeta Gráfica AMD RX 7900 XT', 'description' => 'GPU de alto rendimiento para juegos y creación de contenido.', 'price' => 680.00, 'quantity' => 7],
            ['name' => 'Router ASUS RT-AX88U', 'description' => 'Router WiFi 6 con alta velocidad y cobertura extendida.', 'price' => 250.00, 'quantity' => 20],
            ['name' => 'Router TP-Link Archer AX50', 'description' => 'Router WiFi 6 con buena relación calidad-precio.', 'price' => 120.00, 'quantity' => 25],
            ['name' => 'Memoria RAM Corsair 32GB', 'description' => 'Kit de 32GB DDR4 a 3200MHz para rendimiento extremo.', 'price' => 150.00, 'quantity' => 40],
            ['name' => 'Memoria RAM G.Skill 16GB', 'description' => 'Kit de 16GB DDR4 para PC de alto rendimiento.', 'price' => 80.00, 'quantity' => 50],
            ['name' => 'Disco SSD Samsung 1TB', 'description' => 'SSD de 1TB NVMe para almacenamiento rápido.', 'price' => 120.00, 'quantity' => 35],
            ['name' => 'Disco HDD Seagate 2TB', 'description' => 'Disco duro tradicional de 2TB para almacenamiento masivo.', 'price' => 70.00, 'quantity' => 40],
            ['name' => 'Auriculares Sony WH-1000XM5', 'description' => 'Auriculares inalámbricos con cancelación de ruido.', 'price' => 300.00, 'quantity' => 18],
            ['name' => 'Auriculares HyperX Cloud II', 'description' => 'Auriculares gaming con sonido envolvente 7.1.', 'price' => 90.00, 'quantity' => 25],
            ['name' => 'Impresora HP LaserJet Pro', 'description' => 'Impresora láser multifunción para oficina y hogar.', 'price' => 200.00, 'quantity' => 12],
        ];

        foreach ($products as $product) {
            Product::create([
               'name' => $product['name'],
               'description' => $product['description'],
               'price' => $product['price'],
               'quantity' => $product['quantity'],
               'category_id' => $categories->random()->id,
               'user_id' => $users->random()->id,
               'status' => 'AVAILABLE'
            ]);
        }
    }
}
