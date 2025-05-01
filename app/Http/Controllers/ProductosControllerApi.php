<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Productos;

class ProductosControllerApi extends Controller
{
    public function traerproductos(){
        $productos = Productos::all();
        return view('productos.index',compact('productos'));
    }

    public function crearproductos() 
    {
        return view('productos.create');
    }

    public function editarproductos($id) 
    {
        $productos = Productos::findOrFail($id);
        return view('productos.edit',compact('productos'));
    }
}
