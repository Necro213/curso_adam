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
    <script>
        $(document).ready(function () {
            $('#tareas').DataTable({
                processing: true,
                serverSide:true,
                ajax: {
                    url: 'api/tareas'
                },
                dataFilter: function(data){
                    var json = jQuery.parseJSON( data );
                    json.recordsTotal = json.total;
                    json.recordsFiltered = json.total;
                    json.data = json.list;

                    return JSON.stringify( json ); // return JSON string

                }
            })
        });
    </script>
@endsection