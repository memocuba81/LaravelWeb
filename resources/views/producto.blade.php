@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-16">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

        <!-- IMAGEN -->
        <div class="relative">

            @if($producto->badge)

                <div class="absolute top-6 left-6 z-10">

                    <span class="bg-indigo-600 text-white px-5 py-2 rounded-full shadow-lg font-semibold">

                        {{ $producto->badge }}

                    </span>

                </div>

            @endif

            <img src="{{ asset($producto->imagen) }}"
                 class="w-full rounded-3xl shadow-2xl object-cover">

        </div>

        <!-- INFO -->
        <div>

            <!-- CATEGORÍA -->
            <span class="inline-block bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm mb-5">

                {{ ucfirst($producto->categoria) }}

            </span>

            <!-- NOMBRE -->
            <h1 class="text-5xl font-bold text-gray-900 mb-6">

                {{ $producto->nombre }}

            </h1>

            <!-- MARCA -->
            <p class="text-lg text-gray-500 mb-4">

                Marca:

                <span class="font-semibold text-gray-800">

                    {{ $producto->marca }}

                </span>

            </p>

            <!-- PRECIO -->
            <p class="text-5xl font-bold text-indigo-600 mb-8">

                {{ $producto->precio }}

            </p>

            <!-- STOCK -->
            <div class="mb-8">

                @if($producto->stock > 5)

                    <span class="bg-green-100 text-green-700 px-5 py-3 rounded-xl font-semibold">

                        ✔ Disponible ({{ $producto->stock }} unidades)

                    </span>

                @elseif($producto->stock > 0)

                    <span class="bg-yellow-100 text-yellow-700 px-5 py-3 rounded-xl font-semibold">

                        ⚠ Quedan pocas unidades ({{ $producto->stock }})

                    </span>

                @else

                    <span class="bg-red-100 text-red-700 px-5 py-3 rounded-xl font-semibold">

                        ❌ Sin stock

                    </span>

                @endif

            </div>

            <!-- DESCRIPCIÓN -->
            <div class="bg-white rounded-3xl shadow-lg p-8 mb-10">

                <h3 class="text-2xl font-bold mb-5">

                    Descripción

                </h3>

                <p class="text-gray-600 text-lg leading-relaxed">

                    {{ $producto->descripcion }}

                </p>

            </div>

           <!-- BOTONES -->
<div class="flex flex-wrap gap-4">

    <form
        action="/carrito/add/{{ $producto->id }}"
        method="POST">

        @csrf

        <button
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl shadow-lg transition">

            🛒 Añadir al carrito

        </button>

    </form>

    <button
        class="bg-gray-200 hover:bg-gray-300 px-8 py-4 rounded-2xl transition">

        ❤️ Favorito

    </button>

</div>

        </div>

    </div>

</div>

@endsection
