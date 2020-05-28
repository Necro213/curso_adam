@extends('layouts.navbar')


@section('navbar')

    <h2>Tareas</h2>

    <h3>Tabla con for each</h3>
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
                           @if ($tarea->estado == 1)
                               <label>Terminado</label>

                            @else
                                <label>Pendiente</label>
                            @endif
                        </td>
                        <td>
                            <ul class="list-inline m-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-success"  href="{{route('editar',['id'=>$tarea->id])}}">
                                        Editar
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <form class="form-group " method="POST" action="/delete/{{$tarea->id}}">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-danger" value="Eliminar">
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




    <script src="{{asset('css/stylebasic.css')}}"></script>


<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>

@endsection
