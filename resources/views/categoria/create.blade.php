@extends('layouts.plantilla')

@section('content_header')
<title>Crear Categoria</title>
@endsection

@section('contenido')
    @include('components.error-box')
    
    <h2>Crear Categoria</h2>

    <form action="/categorias" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
        </div>
        <a href="/categorias" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </form>
@endsection