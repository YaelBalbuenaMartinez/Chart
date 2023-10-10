<?php

namespace Database\Seeders;

use App\Models\CatalogoBancos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatalogoBancosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ejemplo de inserción de datos en la tabla catalogo_bancos
    CatalogoBancos::create([
        'Clave' => '002',
        'Nombre_corto' => 'BANAMEX',
        'Nombre_o_razon_social' => 'Banco Nacional de México, S.A., Institución de Banca Múltiple, Grupo Financiero Banamex',
    ]);

    CatalogoBancos::create([
        'Clave' => '006',
        'Nombre_corto' => 'BANCOMEXT',
        'Nombre_o_razon_social' => 'Banco Nacional de Comercio Exterior, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo',
    ]);
    
    CatalogoBancos::create([
        'Clave' => '006',
        'Nombre_corto' => 'BANCOMEXT',
        'Nombre_o_razon_social' => 'Banco Nacional de Comercio Exterior, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo',
    ]);
    }
}
