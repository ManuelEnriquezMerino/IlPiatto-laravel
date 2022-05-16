<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#platoCategoria">
  Categorias
</button>

<!-- Modal -->
<div class="modal fade" id="platoCategoria" tabindex="-1" aria-labelledby="platoCategoria" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Categorias</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          @foreach ($categorias as $categoria)
            {{ Form::checkbox('categorias[]', $categoria->id, $categoriasActuales->contains($categoria->id)) }}
            {{ $categoria->nombre }}
          @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>