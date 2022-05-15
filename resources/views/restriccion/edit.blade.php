@extends('layouts.plantilla')

@section('content_header')
<title>Editar restriccion</title>
@endsection

@section('contenido')
    <form action="/restricciones/{{$restriccion->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$restriccion->nombre}}" tabindex="1">    
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$restriccion->descripcion}}" tabindex="2">
        </div>
        <a href="/restricciones" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </form>
@endsection