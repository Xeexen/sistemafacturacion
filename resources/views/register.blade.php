@extends('layouts.app')

@section('titulo')
    Register
@endsection

@section('content')
    <div class="md:flex md:justify-center">
        <div>
            <title> 
                <h1 class="text-3xl font-black">
                Registro
                </h1> 
            </title>
           
        </div>
        <div class="md:w-3/12 bg-white p-6 rounded-ls shadow-xl">
            <form action="/registro" method="POST">
                @csrf
                 
                <div class="mb:w-4/12">
                    <label for="nombre" class="md-2block uppercase text-gray-400 font-sans">
                        Nombre
                    </label>
                    <input 
                        id="nombre" 
                        name="nombre" 
                        type="text" 
                        placeholder="Nombre" 
                        class="border p-3 w-full rounded-lg @error('nombre') border-red-500                         
                        @enderror"
                        value="{{old('nombre')}}"
                    />
                    @error('nombre')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}
                        </p>
                    @enderror 
                </div>  
                <div class="mb-5">
                    <label for="apellido" class="md-2block uppercase text-gray-400 font-sans">
                    Apellido
                    </label>
                    <input 
                        id="apellido" 
                        name="apellido" 
                        type="text" 
                        placeholder="Apellido"  
                        class="border p-3 w-full rounded-lg @error('apellido') border-red-500                         
                        @enderror"
                        value="{{old('apellido')}}"" 
                    />
                    @error('apellido')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        </p>
                    @enderror 
                </div>
                <div class="mb-5">
                    <label for="direccion" class="md-2block uppercase text-gray-400 font-sans">
                    Direccion   
                    </label>
                    <input 
                        id="direccion" 
                        name="direccion" 
                        type="text" 
                        placeholder="Direccion"  
                        class="border p-3 w-full rounded-lg @error('direccion') border-red-500                         
                        @enderror"
                        value="{{old('direccion')}}"" 
                    />
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        </p>
                    @enderror 
                </div>
                <div class="mb-5">
                    <label for="telefono" class="md-2block uppercase text-gray-400 font-sans">
                    Telefono
                    </label>
                    <input 
                        id="telefono" 
                        name="telefono" 
                        type="text" 
                        placeholder="telefono"  
                        class="border p-3 w-full rounded-lg @error('telefono') border-red-500                         
                        @enderror"
                        value="{{old('telefono')}}"" 
                    />
                    @error('telefono')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        </p>
                    @enderror 
                </div>
                <div class="mb-5">
                    <label for="correo" class="md-2block uppercase text-gray-400 font-sans">
                    Correo
                    </label>
                    <input 
                        id="correo" 
                        name="correo" 
                        type="email" 
                        placeholder="Correo"  
                        class="border p-3 w-full rounded-lg @error('correo') border-red-500                         
                        @enderror"
                        value="{{old('correo')}}"" 
                    />
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        </p>
                    @enderror 
                </div>
                <button class="w-full md:w-auto bg-blue-500 text-white font-bold py-2 px-4 border border-blue-600 rounded-lg">
                    Entrar
                </button>
            </form>
            
        </div>
    </div>
@endsection
