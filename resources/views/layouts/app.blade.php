<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Nombre Sistema</title>
    @vite('resources/css/app.css')
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                Nombre Empresa
            </h1>

            @auth
                <a href="{{ route('login') }}" class="text-xl text-blue-500 hover:text-blue-700">
                    Log in
                </a>
            @else
                <a class="text-blue-600 hover:text-blue-500" href="/registro">
                    <span class="font-normal">{{ auth()->user()->username }}

                    </span>
                </a>

                <form method="POST" action="{{ route('logout') }}">

                    <buttom class="text-blue-600 hover:text-blue-500">
                        <span class="font-bold">Cerrar Sesion</span>
                    </buttom>
                    
                </form>

            @endauth

            <h1 class="text-2xl text-gray-600 font-black">
                <nav>
                    <a class="text-blue-600 hover:text-blue-500" href="/logout">
                        <span class="font-bold">Registro</span>
                    </a>

                    <a class="text-blue-600 hover:text-blue-500" href="/ingreso ">
                        <span class="font-bold">Acceder</span>
                    </a>
                </nav>

            </h1>

        </div>
    </header>
    <main>
        <h2>
        </h2 class="text-center p-5 text-gray-500 font-bold uppercase">
        @yield('content')
    </main>
    <footer>

    </footer>
</body>

</html>
