@extends('layouts.app')

@section('titulo')
    Login
@endsection

@section('content')
    <div class="md:flex md:justify-center">
        <div>
            <title>
                <h1 class="text-3xl font-black">
                    Bienvenido
                </h1>
            </title>

        </div>
        <div class="md:w-3/12 bg-white p-6 rounded-ls shadow-xl">
            <form action="/registro" method="POST">
                @csrf

                <div class="mb:w-4/12">
                    <label for="username" class="md-2block uppercase text-gray-400 font-sans">
                        Usuario aqui te logueas
                    </label>
                    <input id="username" name="username" type="text" placeholder="Usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500                         
                        @enderror"
                        value="{{ old('username') }}" />
                    @error('username')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="md-2block uppercase text-gray-400 font-sans">
                        Password
                    </label>
                    <input id="password" name="password" type="password" placeholder="Password"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500                         
                        @enderror"
                        value="{{ old('password') }}"" />
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="checkbox" name="remember"> Mantener Sesion Abierta
                </div>
                <button
                    class="w-full md:w-auto bg-blue-500 text-white font-bold py-2 px-4 border border-blue-600 rounded-lg">
                    Entrar
                </button>
            </form>

        </div>
    </div>
@endsection
