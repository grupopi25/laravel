<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class AdiminController extends Controller
{
   public function dashboard(){
    $totalClientes = Cliente::count();
    return view('site.admin.index', compact('totalClientes'));
}

   public function pets(){
    return view('site/admin/pets');
   }
   public function clients(){
    $clientes = Cliente::all();
    return view('site.admin.clientes', compact('clientes'));
}

   public function service(){
    return view('site/admin/servicos');
   }
   public function mensage(){
   return view('site/admin/mensage ');
   }
   public function doctors(){
    return view('site/admin/doctors');
   }
   public function finance(){
    return view('site/admin/finance');
   }
}
