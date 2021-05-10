
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
                <div class="box-body" style="">
                    <div class="row">
                      <div class="container">
                        <h5  class="font-weight-bold">Animales Create</h5>
                        <a href="{{route('animales')}}" class="btn btn-info mb-4">Animales</a>
                        <form action="{{route('animales.store')}}" method="POST">
                          @csrf
                          <div class="row">
                              <div class="col-md-4">
                              
                                  {{-- <div class="form-group">
                                      <label>Numero</label>
                                      <input type="text" class="form-control" name="numero" required>
                                  </div>  --}}
                                  <div class="form-group">
                                    <label>Especie</label>
                                    <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="especie">
                                        <option value="Bovino">Bovino</option>
                                        <option value="Caprino">Caprino</option>
                                        <option value="Equino">Equino</option>
                                    </select>
                                    
                                </div>
                                  <div class="form-group">
                                      <label>Nombre</label>
                                      <input type="text" class="form-control" name="nombre" required>
                                  </div> 
                                  <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="sexo">
                                        <option value="F">F</option>
                                        <option value="M">M</option>
                                    </select>
                                  </div>

                                  <div class="form-group">
                                      <label>ID Madre </label>
                                      <input type="number" class="form-control" name="id_madre" required>
                                  </div>
              
                                  {{-- <div class="form-group">
                                      <label>ID Padre  </label>
                                      <input type="number" class="form-control" name="id_padre" required>
                                  </div>     --}}
                                  <div class="form-group">
                                    <label>ID Padre</label>
                                    <select class="form-select form-select-lg mb-3 form-control js-example-basic-single"  aria-label=".form-select-lg example" name="id_padre" required>
                                        @foreach ($reproductores as $item)
                                          <option value="{{$item->id}}">{{$item->nombre}} -{{$item->id}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label>Fecha Nacimiento </label>
                                    <input type="date" class="form-control" name="fecha_nacimiento" required > 
                                  </div>
                                  
                              </div>
                              <div class="col-md-4">


        
                              <div class="form-group">
                                  <label>Peso Nacimiento</label>
                                  <input type="number" step="any" class="form-control" name="peso_nacimiento" required>
                              </div>
          
       
                                <div class="form-group">
                                    <label>Fecha Compra </label>
                                    <input type="date" class="form-control" name="fecha_compra" required > 
                                </div>

                                <div class="form-group">
                                  <label>Fecha Salida </label>
                                  <input type="date" class="form-control" name="fecha_salida" required > 
                                </div>

                                <div class="form-group">
                                  <label>Tipo Salida</label>
                                  <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="tipo_salida">
                                      <option value="Descarte">Descarte</option>
                                      <option value="Matadero">Matadero</option>
                                      <option value="Muerte">Muerte</option>
                                      <option value="Enfermedad">Enfermedad</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label for="exampleFormControlTextarea1">Comentario Salida</label>
                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario_salida"></textarea>
                                </div>
                                  
                              </div>
                              <div class="col-md-4">

                                  <div class="form-group">
                                      <label>Raza</label>
                                      <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="raza">
                                          <option value="Pardo Aleman">Pardo Aleman</option>
                                          <option value="F1 Pardo x Guzerat">F1 Pardo x Guzerat</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label>Hato</label>
                                      <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="hato">
                                          <option value="Lechero">Lechero</option>
                                          <option value="Carne">Carne</option>
                                          <option value="Doble Proposito">Doble Proposito</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label>Marca</label>
                                      <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="marca">
                                          <option value="XZ4">XZ4</option>
                                          <option value="M8N">M8N</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label>Capa</label>
                                      <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="capa">
                                          <option value="Parda">Parda</option>
                                          <option value="Blanca">Blanca</option>
                                          <option value="Griz">Griz</option>
                                          <option value="Blanco">Blanco</option>
                                          <option value="Rojo">Rojo</option>
                                      </select>
                                  </div>

                                  <div class="form-group mb-5">
                                      <label for="exampleInputEmail1">Tipo Animal </label>
                                      <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="tipo_animal">
                                        <option value="Lechero Alta producción">Lechero Alta producción</option>
                                        <option value="Carnico">Carnico</option>
                                        <option value="Doble proposito">Doble proposito</option>
                                      </select>
                                  </div>
              
                                  <button type="submit" class="btn btn-success">Crear</button>
                              </div>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
        
@endsection

@section('js')
  <script>
    $(document).ready(function() {
      $('.js-example-basic-single').select2();
    });
  </script>
@endsection()
