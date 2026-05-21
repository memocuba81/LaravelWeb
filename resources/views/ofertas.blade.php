@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-16">

    <!-- TÍTULO -->
    <div class="text-center mb-14">

        <h1 class="text-5xl font-bold text-gray-900 mb-4">

            🔥 Ofertas Especiales

        </h1>

        <p class="text-gray-500 text-xl">

            Descubre nuestros mejores descuentos.

        </p>

    </div>

    <!-- GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($productos as $producto)

            @if($producto['badge'] == 'Oferta')

                <!-- CARD -->
                <div class="relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition duration-300">

                    <!-- BADGE -->
                    <div class="absolute top-4 left-4 bg-red-500 text-white px-4 py-1 rounded-full text-sm font-bold z-10">

                        🔥 Oferta

                    </div>

                    <!-- IMAGEN -->
                    <img src="{{ asset($producto['imagen']) }}"
                         class="w-full h-56 object-cover">

                    <!-- INFO -->
                    <div class="p-6">

                        <h2 class="text-2xl font-bold text-gray-800 mb-3">

                            {{ $producto['nombre'] }}

                        </h2>

                        <p class="text-indigo-600 text-3xl font-bold mb-6">

                            {{ $producto['precio'] }}

                        </p>

                        <a href="/producto/{{ $producto['id'] }}"
                           class="block text-center bg-indigo-600 hover:bg-indigo-700 text-white py-3 rounded-2xl font-semibold transition duration-300">

                            Ver producto

                        </a>

                    </div>

                </div>

            @endif

        @endforeach

    </div>

</div>

@endsection
