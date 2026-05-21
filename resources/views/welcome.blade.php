@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="relative h-[600px] flex items-center justify-center text-center overflow-hidden">

    <!-- IMAGEN -->
    <div class="absolute inset-0">

        <img src="{{ asset('images/banner/banner-gaming.jpeg') }}"
             class="w-full h-full object-cover">

        <!-- OVERLAY -->
        <div class="absolute inset-0 bg-black/70"></div>

    </div>

    <!-- CONTENIDO -->
    <div class="relative z-10 max-w-4xl px-6">

        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">

                {{ __('messages.welcome') }}

        </h1>

        <p class="text-xl md:text-2xl text-gray-300 mb-10">

            {{ __('messages.subtitle') }}

        </p>

        <div class="flex flex-wrap justify-center gap-4">

            <a href="/productos"
               class="bg-indigo-600 hover:bg-indigo-700 text-white px-10 py-4 rounded-2xl text-lg font-semibold transition duration-300 shadow-lg">

                Ver productos

            </a>

            <a href="/ofertas"
               class="bg-white/10 backdrop-blur-md border border-white/20 hover:bg-white/20 text-white px-10 py-4 rounded-2xl text-lg font-semibold transition duration-300">

                Ver ofertas

            </a>

        </div>

    </div>

</section>

<!-- PRODUCTOS -->
<section class="max-w-7xl mx-auto px-6 py-20">

    <!-- TÍTULO -->
    <div class="mb-12 text-center">

        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">

            Productos Destacados

        </h2>

        <p class="text-gray-500 text-lg">

            Descubre lo más vendido de nuestra tienda.

        </p>

    </div>

     <!-- GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($productos as $producto)

            <!-- CARD -->
            <div class="relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition duration-300">

                <!-- BADGES -->
                @if($producto->badge == 'Oferta')

                    <div class="absolute top-4 left-4 bg-red-500 text-white px-4 py-1 rounded-full text-sm font-bold z-10">

                        🔥 Oferta

                    </div>

                @endif

                @if($producto->badge == 'Nuevo')

                    <div class="absolute top-4 left-4 bg-green-500 text-white px-4 py-1 rounded-full text-sm font-bold z-10">

                        🆕 Nuevo

                    </div>

                @endif

                @if($producto->badge == 'Top')

                    <div class="absolute top-4 left-4 bg-yellow-400 text-black px-4 py-1 rounded-full text-sm font-bold z-10">

                        ⭐ Top ventas

                    </div>

                @endif

                  <!-- IMAGEN -->
                <img src="{{ asset($producto->imagen) }}"
                     class="w-full h-60 object-cover">

                <!-- INFO -->
                <div class="p-6">

                    <h3 class="text-2xl font-bold text-gray-800 mb-3">

                        {{ $producto->nombre }}

                    </h3>

                    <p class="text-indigo-600 text-3xl font-bold mb-6">

                        {{ $producto->precio }}

                    </p>

                    <a href="/producto/{{ $producto->id }}"
                       class="block text-center bg-indigo-600 hover:bg-indigo-700 text-white py-3 rounded-2xl font-semibold transition duration-300">

                        Ver producto

                    </a>

                </div>

            </div>

        @endforeach

    </div>

</section>

@endsection
