<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index ()
    {
         return view('login');
    }

    public function store(request $request){
        $request->validate([
            'correo' =>'required|email',
            '' =>'required|min:6',
        ]);

        if(!auth()->attempt($request->only('correo'), ($request->remember))){
            return back()->withErrors(['correo' => trans('auth.failed'), ]);
        }

        return redirect()->route('post.index', auth()->user()->ruc);
   
    }

   
}
