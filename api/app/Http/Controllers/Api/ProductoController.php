<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return $productos;
    }

    
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto-> nombre = $request->nombre;
        $producto-> descripcion = $request->descripcion;
        $producto-> creacion = $request->creacion;
        $producto-> pagina = $request->pagina;

        $producto -> save();
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        return $producto;
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($request->id);
        $producto-> nombre = $request->nombre;
        $producto-> descripcion = $request->descripcion;
        $producto-> creacion = $request->creacion;
        $producto-> pagina = $request->pagina;

        $producto -> save();
        return $producto;
    }

    
    public function destroy($id)
    {
        $producto = Producto::destroy($id);
        return $producto;
    }
}
