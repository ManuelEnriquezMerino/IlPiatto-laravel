@extends('layouts.plantilla')

@section('content_header')
<title>Crear Plato</title>
@endsection

@section('contenido')
    @include('components.error-box')

    <h2>Crear Plato</h2>

    <form action="/platos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
        </div>
        <div>
            @include('plato.modalButtons.plato-categorias-create')
            @include('plato.modalButtons.plato-restricciones-create')
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" step="any" value="0" class="form-control" tabindex="3">
        </div>
        <a href="/platos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </form>
@endsection