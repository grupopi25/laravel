<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function home(){
    return view('site.home.index');
}
public function sobre(){
    return view('user.sobrenos');
}

}
