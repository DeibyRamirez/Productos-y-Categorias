<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Categorias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Paso 5
        // Creo los datos de prueba para la tabla categorias
        Categorias::create([
            'nombre' => 'Electrónica',
            'descripcion' => 'Dispositivos electrónicos y gadgets.',
        ]);
        Categorias::create([
            'nombre' => 'Ropa',
            'descripcion' => 'Prendas de vestir y accesorios.',
        ]);
        Categorias::create([
            'nombre' => 'Alimentos',
            'descripcion' => 'Artículos para el hogar y alimentos.',
        ]);
        Categorias::create([
            'nombre' => 'Juguetes',
            'descripcion' => 'Juguetes y juegos para niños.',
        ]);
        Categorias::create([
            'nombre' => 'Deportes',
            'descripcion' => 'Equipamiento y ropa deportiva.',
        ]);
        Categorias::create([
            'nombre' => 'Libros',
            'descripcion' => 'Literatura y libros de texto.',
        ]);
        Categorias::create([
            'nombre' => 'Salud y Belleza',
            'descripcion' => 'Productos de cuidado personal y belleza.',
        ]);
    }
}
