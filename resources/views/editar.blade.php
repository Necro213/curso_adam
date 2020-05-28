@extends('layouts.navbar')


@section('navbar')

    <div class="modal-body">
        <form class="form-group" method="POST" action="/update/{{$tarea->id}}" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$tarea->nombre}}" >
            </div>
            <div>
                <label for="">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" value="{{$tarea->descripcion}}">
            </div>
            <div>
                <label for="">Numero</label>
                <input type="number" name="numero" class="form-control" value="{{$tarea->numero}}">
            </div>
            <div>
                <label for="">Estado</label>
                <select type="text" name="estado" class="form-control" value="{{$tarea->estado}}">
                    <option value="1">Terminada</option>
                    <option value="0">No terminada</option>
                </select>
            </div>
            <div class="modal-footer">
                <a  class="btn btn-warning" href="/">Regresar</a>
                <button type="submit"  class="btn btn-success"  data->Guardar</button>
            </div>
        </form>
    </div>



    @endsection