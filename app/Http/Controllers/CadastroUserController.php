<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CadastroUserController extends Controller
{
    public function create(){
        return view('user.CadastroUser');
    }
      public function store(Request $request){
       User::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'password'=> $request->password,

       ]);
       return redirect()
      }

}
