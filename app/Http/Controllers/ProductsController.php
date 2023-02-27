<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    public function index()
    {
        $productos = Product::orderBy('name')->get();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $producto = new Product();
        $producto->name = $request->input('name');
        $producto->description = $request->input('description');;
        $producto->price = $request->input('price');
        $producto->save();
        return redirect()->route('productos.index');
    }

    public function search(Request $request)
    {
        $nombre = $request->input('name');
        $precio_minimo = $request->input('price_min');
        $precio_maximo = $request->input('price_max');

        $query = Product::query();
        if (!empty($nombre)) {
            $query->where('name', 'like', "%$nombre%");
        }

        if (!empty($precio_minimo)) {
            $query->where('price', '>=', $precio_minimo);
        }

        if (!empty($precio_maximo)) {
            $query->where('price', '<=', $precio_maximo);
        }
        $productos = $query->orderBy('name')->get();
        return view('productos.index', compact('productos'));
    }


}
