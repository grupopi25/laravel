<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadastroUserController extends Controller
{
    public function create(){
        return view('layouts.CadastroUser');
    }
}
