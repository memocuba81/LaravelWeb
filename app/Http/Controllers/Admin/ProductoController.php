<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();

        return view('admin.productos.index', [
        'productos' => $productos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        $request->validate([

            'nombre'=>'required|max:255',
            'precio'=>'required',
            'imagen'=>'required|image',
            'categoria'=>'required',
            'descripcion'=>'required',
            'marca'=>'required',
            'stock'=>'required|integer|min:0',

        ]);

        $rutaImagen = $request->file('imagen')
                          ->store('products','public');

        Producto::create([

            'nombre'=>$request->nombre,
            'precio'=>$request->precio,
            'imagen'=>'storage/'.$rutaImagen,
            'categoria'=>$request->categoria,
            'badge'=>$request->badge,
            'descripcion'=>$request->descripcion,
            'marca'=>$request->marca,
            'stock'=>$request->stock,

        ]);

        return redirect('/admin/productos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);

        return view('admin.productos.edit', [

        'producto' => $producto

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'nombre' => 'required|max:255',

            'precio' => 'required',

            'imagen' => 'required',

            'categoria' => 'required',

            'descripcion' => 'required',

            'marca' => 'required',

            'stock' => 'required|integer|min:0',

        ]);

            $producto = Producto::findOrFail($id);

            $producto->update($request->all());

            return redirect('/admin/productos');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);

        $producto->delete();

        return redirect('/admin/productos');
    }
}
