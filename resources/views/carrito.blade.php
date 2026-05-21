@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-12">

    <h1 class="text-5xl font-bold mb-12">

        🛒 Mi Carrito

    </h1>

    <div class="space-y-6">

        @forelse($carrito as $id => $producto)

            <div class="bg-white rounded-3xl shadow p-6 flex gap-6 items-center">

                <img
                    src="{{ asset($producto['imagen']) }}"
                    class="w-28 h-28 object-cover rounded-xl">

                <div>

                    <h2 class="text-2xl font-bold">

                        {{ $producto['nombre'] }}

                    </h2>

                    <p class="text-indigo-600 text-xl">

                        {{ $producto['precio'] }}

                    </p>

                    <form
                        action="/carrito/remove/{{ $id }}"
                        method="POST"
                        class="mt-4">

                        @csrf

                        <button
                            class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-xl transition">

                                    🗑 Eliminar

                        </button>

                    </form>

                </div>

            </div>

        @empty

            <p class="text-gray-500 text-xl">

                Tu carrito está vacío.

            </p>

        @endforelse

        @if(count($carrito))

    <div class="bg-gray-900 text-white rounded-3xl p-8 mt-10">

        <h2 class="text-3xl font-bold">

            Total:

            {{ number_format($total,0,',','.') }}€

        </h2>

    </div>

    @endif

    <form
    action="/checkout"
    method="POST"
    class="mt-8">

    @csrf

    <button
        class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-2xl transition">

        ✅ Finalizar compra

    </button>

</form>

</div>

</div>

@endsection
