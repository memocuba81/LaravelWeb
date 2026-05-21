@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-12">

    <h1 class="text-4xl font-bold mb-10">

        Editar Producto

    </h1>

    <form
        action="/admin/productos/{{ $producto->id }}"
        method="POST"
        class="space-y-6">

        @csrf
        @method('PUT')

        <input
            type="text"
            name="nombre"
            value="{{ $producto->nombre }}"
            class="w-full border rounded-xl p-4">

        <input
            type="text"
            name="precio"
            value="{{ $producto->precio }}"
            class="w-full border rounded-xl p-4">

        <input
            type="text"
            name="imagen"
            value="{{ $producto->imagen }}"
            class="w-full border rounded-xl p-4">

        <input
            type="text"
            name="categoria"
            value="{{ $producto->categoria }}"
            class="w-full border rounded-xl p-4">

        <input
            type="text"
            name="badge"
            value="{{ $producto->badge }}"
            class="w-full border rounded-xl p-4">

        <textarea
            name="descripcion"
            rows="5"
            class="w-full border rounded-xl p-4">{{ $producto->descripcion }}</textarea>

        <input
            type="text"
            name="marca"
            value="{{ $producto->marca }}"
            class="w-full border rounded-xl p-4">

        <input
            type="number"
            name="stock"
            value="{{ $producto->stock }}"
            class="w-full border rounded-xl p-4">

        <button
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl">

            Guardar cambios

        </button>

    </form>

</div>

@endsection
