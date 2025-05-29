<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class CadastroUserController extends Controller
{
    public function index(){
        return view('user.CadastroUser');
    }

     public function store(Request $request){
        try{
            User::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> $request->password,

            ]);
             return redirect()->route('login')->with('success','Usuário Cadastrado Com Sucesso!');
        }catch(Exception $e){
            return back()->withInput()->with('error','Usuário não Cadastrado!');
        }

     }

     public function cad(){
        return view('user.cadastroPet');
    }

}
