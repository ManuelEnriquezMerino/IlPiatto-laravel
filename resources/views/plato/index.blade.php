@extends('layouts.plantilla')

@section('contenido')
<a href="platos/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-stripped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <!-- <th scope="col">Imagen</th> -->
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($platos as $plato)
            <tr>
                <td>{{$plato->id}}</td>
                <td>{{$plato->nombre}}</td>
                <td>{{$plato->descripcion}}</td>
                <!-- <td>{{$plato->imagen}}</td> -->
                <td>{{$plato->precio}}</td>
                <td>
                    <form action="{{ route ('platos.destroy',$plato->id)}}" method="POST">
                        <a href="/platos/{{$plato->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection