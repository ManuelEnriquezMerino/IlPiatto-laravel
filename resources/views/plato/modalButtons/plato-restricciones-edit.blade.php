<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#platoRestriccion">
  Restricciones
</button>

<!-- Modal -->
<div class="modal fade" id="platoRestriccion" tabindex="-1" aria-labelledby="platoRestriccion" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Restricciones</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          @foreach ($restricciones as $restriccion)
            {{ Form::checkbox('restricciones[]', $restriccion->id, $restriccionesActuales->contains($restriccion->id)) }}
            <label title="{{ $restriccion->descripcion }}">{{ $restriccion->nombre }}</label>
          @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>