@extends('layouts.navbar')


@section('navbar')

    <h2>Tareas</h2>


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive">
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
                                        Edit
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
    </div>




    <h1>data table</h1>

    <div class="container">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
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
                            Edit
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
</table>
        </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    </div>

    <script src="{{asset('css/stylebasic.css')}}"></script>
    <script src="{{asset("js/tareas.js")}}"></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection
