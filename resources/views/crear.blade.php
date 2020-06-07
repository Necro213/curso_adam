@extends('layouts.layout')


@section('content')

    <form class="form-group formalizar" method="POST" action="/new" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div>
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" class="form-control">
        </div>
        <div>
            <label for="">Numero</label>
            <input type="number" name="numero" class="form-control">
        </div>
        <div>
            <label for="">Estado</label>
            <select type="text" name="estado" class="form-control">
                <option value="0">Terminada</option>
                <option value="1">No terminada</option>
            </select>
        </div>
        <div class="modal-footer">
            <a  class="btn btn-warning" href="/">Regresar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@endsection

@section("scripts")
    <script src="{{asset('css/forms.css')}}"></script>
@endsection