@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-12">

    <h1 class="text-4xl font-bold mb-10">

        Admin Productos

    </h1>

    <div class="space-y-4">

        @foreach($productos as $producto)

            <div class="bg-white shadow rounded-2xl p-6 flex justify-between items-center">

                <div>

                    <h2 class="font-bold text-xl">

                        {{ $producto->nombre }}

                    </h2>

                    <p class="text-gray-500">

                        {{ $producto->precio }}

                    </p>

                </div>

                <!-- BOTONES -->

                <div class="flex gap-3">

    <a
        href="/admin/productos/{{ $producto->id }}/edit"
        class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-3 rounded-xl">

        ✏️ Editar

    </a>

    <form
        action="/admin/productos/{{ $producto->id }}"
        method="POST">

        @csrf
        @method('DELETE')

        <button
            class="bg-red-600 hover:bg-red-700 text-white px-5 py-3 rounded-xl">

            🗑 Eliminar

        </button>

    </form>

</div>

            </div>

        @endforeach

    </div>

</div>

@endsection
