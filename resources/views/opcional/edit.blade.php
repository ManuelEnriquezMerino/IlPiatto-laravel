@extends('layouts.plantilla')

@section('content_header')
<title>Editar Opcional</title>
@endsection

@section('contenido')
    @include('components.error-box')

    <h2>Editar Opcional: {{$opcional->nombre}}</h2>

    <div class="mb-3">
            <label for="" class="form-label">Plato</label>
            <input id="plato" name="plato" type="text" class="form-control" value="{{$opcional->plato->nombre}}" tabindex="1" disabled>    
    </div>

    <form action="/opcionales/{{$opcional->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$opcional->nombre}}" tabindex="1">    
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$opcional->descripcion}}" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" step="any"class="form-control" value="{{$opcional->precio}}" tabindex="3">
        </div>
        <a href="/opcionales" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </form>
@endsection