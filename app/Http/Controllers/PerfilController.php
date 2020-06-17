<?php

namespace App\Http\Controllers;

use App\info_user;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    function viewHome($id){

        $info_user = info_user::find($id);

        return view('perfil',['info_user'=>$info_user]);
    }



}
