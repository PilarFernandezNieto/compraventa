<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\TipoDocumento;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipoDocumento = [
            ['name' => 'Factura', 'description' => 'Documento utilizado para ventas', 'type' => 'VENTA'],
            ['name' => 'Boleta', 'description' => 'Documento utilizado para ventas', 'type' => 'VENTA'],
            ['name' => 'Guía de Remisión', 'description' => 'Documento utilizado para compras', 'type' => 'COMPRA'],
        ];

        foreach ($tipoDocumento as $doc) {
            TipoDocumento::create($doc);
        }
    }
}
