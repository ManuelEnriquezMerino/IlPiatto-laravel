@extends('layouts.plantilla')

@section('content_header')
<title>Listado de categorias</title>
@endsection

@section('css')
    <link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')
<a href="categorias/create" class="btn btn-primary mt-2 mb-2">CREAR</a>

<table id="categorias" class="table table-striped shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nombre}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td>
                    <form action="{{ route ('categorias.destroy',$categoria->id)}}" method="POST">
                        <a href="/categorias/{{$categoria->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#categorias').DataTable({
                "lengthMenu": [[5,10,50,-1],[5,10,50,"Todos"]],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.12.0/i18n/es-ES.json"
                }
                
            });
        });
    </script>
@endsection

@endsection