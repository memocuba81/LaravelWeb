@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-12">

    <h1 class="text-5xl font-bold mb-12">

        ⚙️ Admin Dashboard

    </h1>

    <!-- STATS -->

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

        <div class="bg-indigo-600 text-white p-8 rounded-3xl shadow-lg">

            <h2 class="text-4xl font-bold">

                {{ $productos }}

            </h2>

            <p class="mt-4">

                📦 Productos

            </p>

        </div>

        <div class="bg-red-500 text-white p-8 rounded-3xl shadow-lg">

            <h2 class="text-4xl font-bold">

                {{ $ofertas }}

            </h2>

            <p class="mt-4">

                🔥 Ofertas

            </p>

        </div>

        <div class="bg-yellow-500 text-white p-8 rounded-3xl shadow-lg">

            <h2 class="text-4xl font-bold">

                {{ $categorias }}

            </h2>

            <p class="mt-4">

                🏷 Categorías

            </p>

        </div>

        <div class="bg-gray-900 text-white p-8 rounded-3xl shadow-lg">

            <h2 class="text-4xl font-bold">

                {{ $sinStock }}

            </h2>

            <p class="mt-4">

                ❌ Sin Stock

            </p>

        </div>

    </div>

    <!-- ACCIONES -->

    <div class="mt-12 flex flex-wrap gap-6">

        <a href="/admin/productos"
           class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl transition shadow-lg">

            📦 Ver productos

        </a>

        <a href="/admin/productos/create"
           class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-2xl transition shadow-lg">

            ➕ Crear producto

        </a>

    </div>

    <!-- PANEL INFO -->

    <div class="mt-14 bg-white rounded-3xl shadow-xl p-10">

        <h2 class="text-3xl font-bold mb-6">

            🚀 Panel Admin

        </h2>

        <p class="text-gray-600 text-lg leading-relaxed">

            Gestiona productos, stock, ofertas, categorías e imágenes
            desde tu panel de administración Laravel.

        </p>

    </div>

</div>

@endsection
