<?php

use Illuminate\Support\Facades\Route;
use App\Models\Producto;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\LanguageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



/*
|--------------------------------------------------------------------------
| INICIO
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    $productos = Producto::all();

    return view('welcome', [
        'productos' => $productos
    ]);

});

Route::get('/admin', function () {

    return view('admin.dashboard', [

        'productos' => Producto::count(),

        'ofertas' =>
            Producto::where('badge','Oferta')->count(),

        'sinStock' =>
            Producto::where('stock',0)->count(),

        'categorias' =>
            Producto::distinct('categoria')->count(),

    ]);

});

Route::get('/lang/{locale}', function ($locale) {

    if (in_array($locale,['es','en','gl'])) {

        session()->put('locale',$locale);

    }

    return redirect()->back();

});

/*
|--------------------------------------------------------------------------
| PRODUCTOS + BUSCADOR + ORDENAR
|--------------------------------------------------------------------------
*/

Route::get('/productos', function () {

    $buscar = request('buscar');
    $orden = request('orden');

    $query = Producto::query();

    if ($buscar) {

        $query->where(function ($q) use ($buscar) {

            $q->where('nombre','LIKE',"%{$buscar}%")
              ->orWhere('categoria','LIKE',"%{$buscar}%")
              ->orWhere('descripcion','LIKE',"%{$buscar}%");

        });

    }

    if ($orden == 'nombre_asc') {

        $query->orderBy('nombre','asc');

    }

    if ($orden == 'nombre_desc') {

        $query->orderBy('nombre','desc');

    }

    $productos = $query->get();

    return view('productos', [
        'productos' => $productos
    ]);

});

/*
|--------------------------------------------------------------------------
| PRODUCTO INDIVIDUAL
|--------------------------------------------------------------------------
*/

Route::get('/producto/{id}', function ($id) {

    $producto = Producto::findOrFail($id);

    return view('producto', [
        'producto' => $producto
    ]);

});

/*
|--------------------------------------------------------------------------
| OFERTAS
|--------------------------------------------------------------------------
*/

Route::get('/ofertas', function () {

    $productos = Producto::where('badge','Oferta')->get();

    return view('ofertas', [
        'productos' => $productos
    ]);

});

Route::post('/carrito/add/{id}', function ($id) {

    $producto = Producto::findOrFail($id);

    $carrito = session()->get('carrito', []);

    $carrito[$id] = [

        'nombre' => $producto->nombre,
        'precio' => $producto->precio,
        'imagen' => $producto->imagen,

    ];

    session()->put('carrito', $carrito);

    return redirect('/carrito');

});

Route::get('/carrito', function () {

    $carrito = session()->get('carrito', []);

    $total = 0;

    foreach ($carrito as $producto) {

        $precio = str_replace(['€','.'], '', $producto['precio']);

        $total += (int) $precio;

    }

    return view('carrito', [

        'carrito' => $carrito,
        'total' => $total

    ]);

});

Route::post('/checkout', function () {

    session()->forget('carrito');

    return view('checkout');

});

Route::post('/carrito/remove/{id}', function ($id) {

    $carrito = session()->get('carrito', []);

    unset($carrito[$id]);

    session()->put('carrito', $carrito);

    return redirect('/carrito');

});

/*
|--------------------------------------------------------------------------
| CONTACTO
|--------------------------------------------------------------------------
*/

Route::view('/contacto','contacto');

/*
|--------------------------------------------------------------------------
| CATEGORÍAS
|--------------------------------------------------------------------------
*/

Route::get('/moviles', function () {

    $productos = Producto::where('categoria','moviles')->get();

    return view('productos', [
        'productos' => $productos
    ]);

});

Route::get('/ordenadores', function () {

    $productos = Producto::where('categoria','ordenadores')->get();

    return view('productos', [
        'productos' => $productos
    ]);

});

Route::get('/sonido', function () {

    $productos = Producto::where('categoria','sonido')->get();

    return view('productos', [
        'productos' => $productos
    ]);

});

Route::get('/gaming', function () {

    $productos = Producto::where('categoria','gaming')->get();

    return view('productos', [
        'productos' => $productos
    ]);

});

/*
|--------------------------------------------------------------------------
| ADMIN CRUD
|--------------------------------------------------------------------------
*/

Route::resource('/admin/productos', ProductoController::class);
