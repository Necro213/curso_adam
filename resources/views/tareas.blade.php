@extends("layouts.layout")

@section("styles")
    <style>
        li {
            float: left;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;

        }
    </style>
@endsection

@section("content")
    <div >
        <div >
            <table class="table" id="tareas">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Numero</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                @foreach($tareas as $tarea)
                    <tbody>
                    <tr>
                        <td>{{$tarea->nombre}}</td>
                        <td>{{$tarea->descripcion}}</td>
                        <td>{{$tarea->numero}}</td>
                        <td>
                            @if ($tarea->estado == 0)
                                <label>Terminado</label>

                            @else
                                <label>Pendiente</label>
                            @endif
                        </td>
                        <td>
                            <ul class="list-inline m-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-success"  href="{{route('editar',['id'=>$tarea->id])}}">
                                        E
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <form class="form-group " method="POST" action="/delete/{{$tarea->id}}">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-danger" value="X">
                                        </div>

                                    </form>
                                </li>
                            </ul>
                        </td>

                    </tr>

                    @endforeach
                    </tbody>
                    <tfoot>
                    <a  class="btn btn-primary"  href="/crear">
                        Nuevo registro
                    </a>

                    </tfoot>
            </table>
        </div>
    </div>
@endsection

@section("scripts")
    <script src="{{asset("js/tareas.js")}}"></script>
@endsection