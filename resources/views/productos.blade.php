@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-12">

    <!-- TÍTULO -->
    <div class="mb-10">

        <h1 class="text-4xl font-bold text-gray-900">

            Nuestros Productos

        </h1>

        <p class="text-gray-500 mt-3 text-lg">

            Tecnología y gaming premium.

        </p>

        @if(request('buscar'))

            <div class="mt-6 bg-indigo-50 border border-indigo-200 rounded-2xl p-4">

                <p class="text-indigo-700 text-lg font-semibold">

                    🔍 Mostrando resultados para
                    "{{ request('buscar') }}"

                </p>

                <p class="text-gray-500 mt-2">

                    Se encontraron {{ $productos->count() }} producto(s).

                </p>

                <a href="/productos"
                   class="inline-block mt-4 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl transition">

                    ✖ Limpiar búsqueda

                </a>

            </div>

        @endif

    </div>

    <!-- ORDENAR -->
    <div class="flex justify-end mb-8">

        <form action="/productos" method="GET">

            <input
                type="hidden"
                name="buscar"
                value="{{ request('buscar') }}">

            <select
                name="orden"
                onchange="this.form.submit()"
                class="border border-gray-300 rounded-xl px-4 py-3 shadow-sm">

                <option value="">

                    Ordenar productos

                </option>

                <option
                    value="nombre_asc"
                    {{ request('orden')=='nombre_asc' ? 'selected' : '' }}>

                    Nombre A-Z

                </option>

                <option
                    value="nombre_desc"
                    {{ request('orden')=='nombre_desc' ? 'selected' : '' }}>

                    Nombre Z-A

                </option>

            </select>

        </form>

    </div>

    <!-- GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @forelse($productos as $producto)

            <div class="relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">

                <!-- BADGES -->

                @if($producto->badge=='Oferta')

                    <div class="absolute top-4 left-4 bg-red-500 text-white px-4 py-1 rounded-full z-10">

                        🔥 Oferta

                    </div>

                @endif

                @if($producto->badge=='Nuevo')

                    <div class="absolute top-4 left-4 bg-green-500 text-white px-4 py-1 rounded-full z-10">

                        🆕 Nuevo

                    </div>

                @endif

                @if($producto->badge=='Top')

                    <div class="absolute top-4 left-4 bg-yellow-400 text-black px-4 py-1 rounded-full z-10">

                        ⭐ Top ventas

                    </div>

                @endif

                <img
                    src="{{ asset($producto->imagen) }}"
                    class="w-full h-56 object-cover">

                <div class="p-6">

                    <h2 class="text-2xl font-bold mb-3">

                        {{ $producto->nombre }}

                    </h2>

                    <p class="text-indigo-600 text-3xl font-bold mb-6">

                        {{ $producto->precio }}

                    </p>

                    <a
                        href="/producto/{{ $producto->id }}"
                        class="block text-center bg-indigo-600 hover:bg-indigo-700 text-white py-3 rounded-2xl">

                        Ver producto

                    </a>

                </div>

            </div>

        @empty

            <div class="col-span-full text-center py-20">

                <h2 class="text-4xl font-bold text-gray-700 mb-4">

                    😕 No se encontraron productos

                </h2>

                <a
                    href="/productos"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl">

                    Ver todos los productos

                </a>

            </div>

        @endforelse

    </div>

</div>

@endsection
