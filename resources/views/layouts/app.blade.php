<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>MiTienda</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <!-- ICONOS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-gray-100 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-gray-900 shadow-lg relative z-50">

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex items-center justify-between h-20">

                <!-- LOGO -->
                <a href="/"
                   class="text-3xl font-bold text-white">

                    🛍️ MiTienda

                </a>

               <!-- BOTÓN MÓVIL -->
<button id="menu-button"
        class="md:hidden text-white text-3xl">

    ☰

</button>

<!-- MENÚ DESKTOP -->
<div class="hidden md:flex items-center gap-8">

    <a href="/"
       class="text-gray-300 hover:text-white transition">

         {{ __('messages.home') }}

    </a>

    <a href="/productos"
       class="text-gray-300 hover:text-white transition">

        {{ __('messages.products') }}

    </a>

    <a href="/ofertas"
       class="text-gray-300 hover:text-white transition">

        {{ __('messages.offers') }}

    </a>

    <!-- DROPDOWN -->
    <div class="relative group">

        <button class="text-gray-300 hover:text-white transition">

             {{ __('messages.departments') }} ▼

        </button>

        <!-- MENÚ -->
        <div class="absolute z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible translate-y-2 group-hover:translate-y-0 transition-all duration-300 bg-white rounded-xl shadow-xl mt-3 w-56 overflow-hidden">

            <a href="/moviles"
               class="block px-4 py-3 hover:bg-gray-100">

                📱 Móviles

            </a>

            <a href="/ordenadores"
               class="block px-4 py-3 hover:bg-gray-100">

                💻 Ordenadores

            </a>

            <a href="/sonido"
               class="block px-4 py-3 hover:bg-gray-100">

                🎧 Sonido

            </a>

            <a href="/gaming"
               class="block px-4 py-3 hover:bg-gray-100">

                🎮 Gaming

            </a>

        </div>

    </div>

    <a href="/contacto"
       class="text-gray-300 hover:text-white transition">

        {{ __('messages.contact') }}

    </a>

</div>

<!-- DERECHA -->
<div class="hidden md:flex items-center gap-4">

    <!-- BUSCADOR -->
    <form action="/productos"
          method="GET"
          class="flex items-center gap-2">

        <input
            type="search"
            name="buscar"
            placeholder="Buscar..."
            value="{{ request('buscar') }}"
            class="bg-gray-800 text-white px-4 py-2 rounded-xl outline-none border border-gray-700 focus:border-indigo-500 w-44">

        <button
            type="submit"
            class="text-white text-xl hover:text-indigo-400 transition">

            <i class="bi bi-search"></i>

        </button>

    </form>

    <!-- CARRITO -->
    <a href="/carrito"
       class="text-white text-xl hover:text-yellow-400 transition relative">

        <i class="bi bi-cart3"></i>

        <span class="absolute -top-3 -right-4 bg-red-500 text-white text-xs rounded-full px-2 py-1">

            {{ count(session('carrito', [])) }}

        </span>

    </a>

    <!-- LOGIN -->
    <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-xl transition">

        Login

    </button>

<!-- IDIOMAS -->
<div class="relative group">

    <button class="text-gray-300 hover:text-white transition">

        🌍 {{ strtoupper(app()->getLocale()) }} ▼
    </button>

    <!-- DROPDOWN -->
    <div class="absolute right-0 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible translate-y-2 group-hover:translate-y-0 transition-all duration-300 bg-white rounded-xl shadow-xl mt-3 w-44 overflow-hidden">

        <a href="/lang/es"
           class="block px-4 py-3 hover:bg-gray-100">

            🇪🇸 Español

        </a>

        <a href="/lang/en"
           class="block px-4 py-3 hover:bg-gray-100">

            🇬🇧 English

        </a>

        <a href="/lang/gl"
           class="block px-4 py-3 hover:bg-gray-100">

            🇬🇱 Galego

        </a>

    </div>

</div>

</div>

</div>

</nav>

<!-- MENÚ MÓVIL -->
<div id="mobile-menu"
     class="hidden bg-gray-900 px-6 py-4 md:hidden">

    <div class="flex flex-col gap-4 text-gray-300">

        <a href="/"
           class="hover:text-white">

            Inicio

        </a>

        <a href="/productos"
           class="hover:text-white">

            Productos

        </a>

        <a href="/ofertas"
           class="hover:text-white">

            Ofertas

        </a>

       <!-- DEPARTAMENTOS MÓVIL -->
<div>

    <button id="departamentos-btn"
            class="hover:text-white w-full text-left">

        Departamentos ▼

    </button>

    <div id="departamentos-menu"
         class="hidden mt-3 ml-4 flex flex-col gap-3">

        <a href="/moviles"
           class="hover:text-white">

            📱 Móviles

        </a>

        <a href="/ordenadores"
           class="hover:text-white">

            💻 Ordenadores

        </a>

        <a href="/sonido"
           class="hover:text-white">

            🎧 Sonido

        </a>

        <a href="/gaming"
           class="hover:text-white">

            🎮 Gaming

        </a>

    </div>

</div>

<a href="/contacto"
   class="hover:text-white">

    Contacto

</a>

</div>

</div>

    <!-- CONTENIDO -->
<main>

    @yield('content')

</main>

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-300 mt-16">

    <div class="max-w-7xl mx-auto px-6 py-12">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

            <!-- LOGO -->
            <div>

                <h2 class="text-2xl font-bold text-white mb-4">

                    🛍️ MiTienda

                </h2>

                <p class="text-gray-400">

                    Tecnología, gaming y accesorios premium.

                </p>

            </div>

          <!-- NAVEGACIÓN -->
<div>

    <h3 class="text-white font-semibold mb-4">

        Navegación

    </h3>

    <div class="flex flex-col gap-2">

        <a href="/"
           class="hover:text-white transition">

            Inicio

        </a>

        <a href="/productos"
           class="hover:text-white transition">

            Productos

        </a>

        <a href="/admin/productos"
           class="hover:text-indigo-400 transition">

            Admin

        </a>

        <a href="/contacto"
           class="hover:text-white transition">

            Contacto

        </a>

    </div>

</div>

<!-- INFORMACIÓN -->
<div>

    <h3 class="text-white font-semibold mb-4">

        Información

    </h3>

    <div class="flex flex-col gap-2">

        <a href="#"
           class="hover:text-white transition">

            Política de privacidad

        </a>

        <a href="#"
           class="hover:text-white transition">

            Cookies

        </a>

        <a href="#"
           class="hover:text-white transition">

            Aviso legal

        </a>

        <a href="#"
           class="hover:text-white transition">

            Términos y condiciones

        </a>

    </div>

</div>

<!-- REDES -->
<div>

    <h3 class="text-white font-semibold mb-4">

        Síguenos

    </h3>

    <div class="flex gap-4 text-2xl">

        <a href="#"
           class="hover:text-white transition">

            <i class="bi bi-facebook"></i>

        </a>

        <a href="#"
           class="hover:text-white transition">

            <i class="bi bi-instagram"></i>

        </a>

        <a href="#"
           class="hover:text-white transition">

            <i class="bi bi-twitter-x"></i>

        </a>

        <a href="#"
           class="hover:text-white transition">

            <i class="bi bi-youtube"></i>

        </a>

    </div>

</div>

</div>

<!-- COPYRIGHT -->
<div class="border-t border-gray-700 mt-10 pt-6 text-center text-gray-500">

    © 2026 MiTienda | Laravel + Tailwind 🚀

</div>

</div>
</footer>


   <!-- SCRIPT MENÚ -->
<script>

    const menuButton =
    document.getElementById('menu-button');

    const mobileMenu =
    document.getElementById('mobile-menu');

    if (menuButton && mobileMenu) {

        menuButton.addEventListener('click', () => {

            mobileMenu.classList.toggle('hidden');

        });

    }

</script>

<script>

    const departamentosBtn =
    document.getElementById('departamentos-btn');

    const departamentosMenu =
    document.getElementById('departamentos-menu');

    if (departamentosBtn && departamentosMenu) {

        departamentosBtn.addEventListener('click', () => {

            departamentosMenu.classList.toggle('hidden');

        });

    }

</script>

</body>

</html>
