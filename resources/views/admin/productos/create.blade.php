@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-12">

    <h1 class="text-4xl font-bold mb-10">

        Crear Producto

    </h1>

    <form
        action="/admin/productos"
        method="POST"
        enctype="multipart/form-data"

        @csrf

        <!-- NOMBRE -->
        <div>

            <input
                type="text"
                name="nombre"
                value="{{ old('nombre') }}"
                placeholder="Nombre"
                class="w-full border rounded-xl p-4">

            @error('nombre')

                <p class="text-red-500 mt-2">

                    {{ $message }}

                </p>

            @enderror

        </div>

        <!-- PRECIO -->
        <div>

            <input
                type="text"
                name="precio"
                value="{{ old('precio') }}"
                placeholder="Precio"
                class="w-full border rounded-xl p-4">

            @error('precio')

                <p class="text-red-500 mt-2">

                    {{ $message }}

                </p>

            @enderror

        </div>

        <!-- IMAGEN -->
        <div>

            <input
                type="file"
                name="imagen"
                class="w-full border rounded-xl p-4">

            @error('imagen')

                <p class="text-red-500 mt-2">

                    {{ $message }}

                </p>

            @enderror

        </div>

        <!-- CATEGORÍA -->
        <div>

            <select
                name="categoria"
                class="w-full border rounded-xl p-4">

                <option value="">Seleccionar categoría</option>

                <option value="moviles" {{ old('categoria')=='moviles' ? 'selected' : '' }}>

                    Moviles

                </option>

                <option value="gaming" {{ old('categoria')=='gaming' ? 'selected' : '' }}>

                    Gaming

                </option>

                <option value="sonido" {{ old('categoria')=='sonido' ? 'selected' : '' }}>

                    Sonido

                </option>

                <option value="ordenadores" {{ old('categoria')=='ordenadores' ? 'selected' : '' }}>

                    Ordenadores

                </option>

            </select>

            @error('categoria')

                <p class="text-red-500 mt-2">

                    {{ $message }}

                </p>

            @enderror

        </div>

        <!-- BADGE -->
        <div>

            <select
                name="badge"
                class="w-full border rounded-xl p-4">

                <option value="">Seleccionar badge</option>

                <option value="Top" {{ old('badge')=='Top' ? 'selected' : '' }}>

                    Top

                </option>

                <option value="Nuevo" {{ old('badge')=='Nuevo' ? 'selected' : '' }}>

                    Nuevo

                </option>

                <option value="Oferta" {{ old('badge')=='Oferta' ? 'selected' : '' }}>

                    Oferta

                </option>

                <option value="Gaming" {{ old('badge')=='Gaming' ? 'selected' : '' }}>

                    Gaming

                </option>

            </select>

        </div>

        <!-- DESCRIPCIÓN -->
        <div>

            <textarea
                name="descripcion"
                rows="5"
                placeholder="Descripcion del producto"
                class="w-full border rounded-xl p-4">{{ old('descripcion') }}</textarea>

            @error('descripcion')

                <p class="text-red-500 mt-2">

                    {{ $message }}

                </p>

            @enderror

        </div>

        <!-- MARCA -->
        <div>

            <input
                type="text"
                name="marca"
                value="{{ old('marca') }}"
                placeholder="Marca"
                class="w-full border rounded-xl p-4">

            @error('marca')

                <p class="text-red-500 mt-2">

                    {{ $message }}

                </p>

            @enderror

        </div>

        <!-- STOCK -->
        <div>

            <input
                type="number"
                name="stock"
                value="{{ old('stock') }}"
                placeholder="Stock"
                class="w-full border rounded-xl p-4">

            @error('stock')

                <p class="text-red-500 mt-2">

                    {{ $message }}

                </p>

            @enderror

        </div>

        <button
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl">

            Guardar producto

        </button>

    </form>

</div>

@endsection
