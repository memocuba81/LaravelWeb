@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-24 text-center">

    <div class="bg-white shadow-xl rounded-3xl p-14">

        <h1 class="text-6xl mb-8">

            ✅

        </h1>

        <h2 class="text-4xl font-bold mb-6">

            Pedido realizado correctamente

        </h2>

        <p class="text-gray-500 text-xl mb-10">

            Gracias por comprar en MiTienda.

        </p>

        <a href="/productos"
           class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl transition">

            Seguir comprando

        </a>

    </div>

</div>

@endsection
