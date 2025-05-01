<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class ApiCategoriasController extends Controller
{
    public function index()
    {
        
        $categorias = Categorias::all();
        return response()->json($categorias, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoria = Categorias::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            
        ]);
        return response()->json($categoria, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categorias::findOrFail($id);
        return response()->json($categoria,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = Categorias::findOrFail($id);
        $categoria->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            
        ]);
        return response()->json($categoria, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categorias::findOrFail($id);
        $categoria->delete();
        return response()->json(['message' => 'Categoria eliminado con éxito'], 200);
    }
}
