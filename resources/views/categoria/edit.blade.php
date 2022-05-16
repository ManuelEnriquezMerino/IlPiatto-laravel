@extends('layouts.plantilla')

@section('content_header')
<title>Editar categoria</title>
@endsection

@section('contenido')
    @include('components.error-box')

    <h2>Editar Categoria: {{$categoria->nombre}}</h2>

    <form action="/categorias/{{$categoria->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$categoria->nombre}}" tabindex="1">    
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$categoria->descripcion}}" tabindex="2">
        </div>
        <a href="/categorias" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </form>
@endsection