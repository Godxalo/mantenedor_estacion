<div class="modal fade" id="agregar_estacion" tabindex="-1" aria-labelledby="agregar_estacion" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Estacion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
      <form action="{{route('estaciones.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Establecimiento:</label>
              <input type="text" class="form-control" id="estab" name="estab">
              @error('estab')
              <br>
              <small>*{{"Campo Establecimiento vacio"}}</small>
              <br>
              @enderror
                  </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Dispositivo_holaMundo:</label>
              <input type="text" class="form-control" id="dispo" name="dispo">
              @error('dispo')
              <br>
              <small>*{{$message}}</small>
              <br>
              @enderror
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">IP:</label>
              <input type="text" class="form-control" id="ip" name="ip">
              @error('ip')
              <br>
              <small>*{{$message}}</small>
              <br>
              @enderror
              <input type="hidden" id="estado" name="estado" value="1">
  
            </div>
       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>   
      </form>
        </div>
      </div>
    </div>
  </div>