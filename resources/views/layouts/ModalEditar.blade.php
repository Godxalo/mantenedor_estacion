<div class="modal fade" id="modificar_estacion{{$estacion->id}}" tabindex="-1" aria-labelledby="modificar_estacion" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modificar Estación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('estaciones.update', $estacion)}}" method="POST">
            @csrf
            @method('put')

                     <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Establecimiento:</label>
                  <input type="text" class="form-control" id="estab" name="estab" value="{{$estacion->establecimiento}}">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Dispositivo:</label>
                  <input type="text" class="form-control" id="dispo" name="dispo" value="{{$estacion->descripcion}}">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Estado:</label>
                  <br>
                  <select name="estado" id="estado">
                    <option value="0" @if($estacion->estado==0) selected="selected" @else  @endif>ACTIVO</option>
                    <option value="1" @if($estacion->estado==1) selected="selected" @else  @endif>INACTIVO</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">IP:</label>
                  <input type="text" class="form-control" id="ip" name="ip" value="{{$estacion->ip}}">
      
                </div>
           
            </div>
  
  
  
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Modificar</button>
        </form>
        </div>
      </div>
    </div>
  </div>