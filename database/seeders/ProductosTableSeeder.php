<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Productos;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Productos::create([
            'nombre' => 'Arroz',
            'precio' => 1300,
            'stock' => 50,
            'categoria_id' => 3

        ]);

        Productos::create([
            'nombre' => 'Manzanas',
            'precio' => 2000,
            'stock' => 100,
            'categoria_id' => 3

        ]);

        Productos::create([
            'nombre' => 'Uniforme Futbol',
            'precio' => 95000,
            'stock' => 30,
            'categoria_id' => 5

        ]);

        Productos::create([
            'nombre' => 'La Respuesta de la vida',
            'precio' => 30000,
            'stock' => 50,
            'categoria_id' => 6

        ]);
        Productos::create([
            'nombre' => 'PC',
            'precio' => 180000,
            'stock' => 20,
            'categoria_id' => 1

        ]);
    }
}
