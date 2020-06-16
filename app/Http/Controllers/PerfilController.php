<?php

namespace App\Http\Controllers;

use App\info_user;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    function viewHome(){

        //   return view('tareas', compact('tareas'));
        return view('perfil');
    }
}
