<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    // Paso 3
    // En el modelo cro las varialbes protegidas, de la tabla, la primary key y los campos que se pueden llenar
    // en la base de datos
    protected $table = 'categorias';

    protected $primaryKey = 'id_categoria';

    protected $fillable = ['nombre', 'descripcion'];

    
}
