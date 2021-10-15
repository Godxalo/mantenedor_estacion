@extends('layouts.app')


@section('tittle', 'Estacion de Marcajes')

@section('content')
<div class="container">
<div class="card">
  <h5 class="card-header">Mantenedor Estaciones de Marcajes.</h5>
  <div class="card-body">
    <div class="row justify-content-end">
      <div class="col-auto">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar_estacion" >
        <i class="fas fa-plus-circle"></i>     
        Agregar Estacion
        </button>
        
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <table id="example" class="table cell-borde" style="width:100%">
          <thead>
            <tr>
              <th>Establecimiento</th>
              <th>Descripción</th>
              <th>Estado</th>
              <th>IP equipo</th>
              <th>Acción </th>
            </tr>
          </thead>

          

          <tbody>
            @foreach($estaciones as $estacion)
                            <tr>
                                <td>{{$estacion->establecimiento}}</td>
                                <td>{{$estacion->descripcion }}</td>
                                <td>@if($estacion->estado==0)
                                  <span class="badge bg-success" >
                                    Activo
                                  </span>
                                @else
                                <span class="badge bg-danger" >
                                  Inactivo
                                </span>
                                @endif
                                </td>
                                <td>{{$estacion->ip }}</td>
                                <td>                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modificar_estacion{{$estacion->id}}">
                                  <i class="bi bi-pencil"></i> 
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="popover" data-trigger="hover" data-content="Deshabilitar">
                                  <i class="bi bi-x-circle"></i>
                                </button></td>
                            </tr> 
                            
                            <!-- Modal modificar estacion -->
                              @include('layouts.ModalEditar ')
            @endforeach
          </tbody>
        </table>
        </div>
      </div>    
  </div>
</div>
 <!-- Modal agregar estacion -->
@include('layouts.ModalAgregar')

</div> 
</div>   

    @endsection
