<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'ruc' => 'require|numeric|unique:users',
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'correo' => 'required|email|unique:users',
            'telefono' => 'required|numeric|unique:users',
        ]);


        User::create([
            'ruc' => $request->Str::slug($request->ruc),
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'direccion' => $request->direccion,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
        ]);

        auth()-> attempt($request->only('ruc'));

        return redirect()->route('post.index');
    }
}
