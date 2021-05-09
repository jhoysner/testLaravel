
@extends('layouts.master')

@section('content')
<div class="content-wrapper">    
  <section class="content-header">
    {{-- <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol> --}}
  </section>

    <!-- Main content -->
    <section class="content">
      <div class="main">
        <div class="container">
          <div class="margin-bottom-40">
            <div class="x_content">
              <div class="margin-bottom-40">
                <!-- EMPIEZA TABLAS-->
                <h5 class="font-weight-bold">Listado de Animales</h5>
                <a href="{{route('animales.create')}}" class="btn btn-success mb-3">CREAR</a>
              </div>
              @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{Session::get('message')}}!</strong> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>                
                </div>
              @endif
              <div class="x_content">
                <table class="table table-striped table-bordered" id="products">
                  <thead class="thead-dark">
                    <tr>
                      <th>ID</th>
                      <th>Numero</th>
                      <th>Nombre</th>
                      <th>Sexo</th>
                      <th>Especie</th>
                      <th>Raza</th>
                      <th>Marca</th>
                      <th>Fecha. N</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($data as $item)
                    <tr>
                    
                      <td>{{$item->id}}</td>
                      <td>{{$item->numero}}</td>
                      <td>{{$item->nombre}}</td>
                      <td>{{$item->sexo}}</td>
                      <td>{{$item->especie}}</td>
                      <td>{{$item->raza}}</td>
                      <td>{{$item->marca}}</td>
                      <td>{{$item->fecha_nacimiento}}</td>
                    
                      <td>
                        <div class="d-flex justify-content-around">
                          <a href="{{route('animales.show',$item->id)}}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a> 
                          <a href="{{route('animales.edit',$item->id)}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
                          <button type="button" class="btn btn-xs btn-danger delete" data-toggle="modal" data-target="#staticBackdrop"  data-id="{{$item->id}}">    
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>
                        </div>
                      </td>
                    </tr>                        
                    
                    @empty
                      <tr>
                        <td colspan="9">
                          <p>No hay registros actualmente</p>
                        </td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>          
              </div>     
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
        
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Quieres eliminar este registro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('animales.delete')}}" method="POST">
            @csrf
            <div class="modal-body">
              Confirmar eliminacion
              <input type="hidden" name="id" id="eliminar">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="submit" class="btn btn-primary">Si</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection

@section('js')
  <script>

    // var exampleModal = document.getElementById('staticBackdrop')
    // exampleModal.addEventListener('show.bs.modal', function (event) {
    //   var button = event.relatedTarget
    //   var recipient = button.getAttribute('data-id')
    //   document.getElementById("eliminar").value = recipient;
    // })
    $('#staticBackdrop').on('show.bs.modal', function (event) {
      console.log('aqui')
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('id') // Extract info from data-* attributes
      $("#eliminar").val(recipient);
    })
  </script>
    
@endsection
