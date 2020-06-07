<?php

namespace App\Http\Controllers;

use App\Tareas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ViewsController extends Controller
{
    function viewHome(){
        $tareas = Tareas::all();

     //   return view('tareas', compact('tareas'));
        return view('tareas',["tareas"=>$tareas]);
    }


    function viewTareas(){
        $tareas = Tareas::all();

        //   return view('tareas', compact('tareas'));
        return view('tareas',["tareas"=>$tareas]);
    }

    function crearT(){
    return view('crear');
    }

    function nuevaT(Request $request){

        $tareas = new Tareas();
        $tareas->nombre= $request->nombre;
        $tareas->descripcion= $request->descripcion;
        $tareas->numero = $request->numero;
        $tareas->estado= $request->estado;
        $tareas->save();

        return redirect()->route('inicio')->with('status','cliente agregado exitosamente');
    }

    function editarT($id){
        $tarea = Tareas::find($id);

  return view('editar',['tarea'=>$tarea]);

    }

    function actualizarT(Request $request,$id){
        $tareas = Tareas::find($id);
        $tareas->nombre=$request->nombre;
        $tareas->descripcion=$request->descripcion;
        $tareas->numero=$request->numero;
        $tareas->estado=$request->estado;
        $tareas->save();


//        return 'Guardado';
        return redirect()->route('inicio')->with('status','cliente editada exitosamente');

    }

    function eliminarT($id){

        Tareas::destroy($id);
       // return 'Eliminado';
        return redirect()->route('inicio')->with('status','tarea editada exitosamente');
    }
}
