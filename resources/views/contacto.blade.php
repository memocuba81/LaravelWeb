@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-16">

    <!-- TÍTULO -->
    <div class="text-center mb-12">

        <h1 class="text-5xl font-bold text-gray-900 mb-4">

            📩 Contacto

        </h1>

        <p class="text-gray-500 text-xl">

            ¿Tienes dudas? Contáctanos.

        </p>

    </div>

    <!-- FORMULARIO -->
    <div class="bg-white rounded-3xl shadow-lg p-10">

        <form class="space-y-6">

            <!-- NOMBRE -->
            <div>

                <label class="block text-gray-700 font-semibold mb-2">

                    Nombre

                </label>

                <input type="text"
                       class="w-full border border-gray-300 rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">

            </div>

            <!-- EMAIL -->
            <div>

                <label class="block text-gray-700 font-semibold mb-2">

                    Email

                </label>

                <input type="email"
                       class="w-full border border-gray-300 rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">

            </div>

            <!-- MENSAJE -->
            <div>

                <label class="block text-gray-700 font-semibold mb-2">

                    Mensaje

                </label>

                <textarea rows="6"
                          class="w-full border border-gray-300 rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>

            </div>

            <!-- BOTÓN -->
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl font-semibold transition duration-300">

                Enviar mensaje

            </button>

        </form>

    </div>

</div>

@endsection
