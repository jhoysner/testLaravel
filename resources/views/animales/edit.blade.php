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
                        <h5  class="font-weight-bold">Animal Edit</h5>

                        <a href="{{route('animales')}}" class="btn btn-info mb-4">Animales</a>
                        
                      <form action="{{route('animales.update', $data->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                          <div class="col-md-4">

                              <div class="form-group">
                                  <label>Numero</label>
                                  <input type="text" class="form-control" name="numero" value="{{$data->numero}}" required>
                              </div> 

                              <div class="form-group">
                                <label>Especie</label>
                                <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="especie">
                                  <option value="{{$data->especie}}">{{$data->especie}}</option>
                                  <option value="Bovino">Bovino</option>
                                    <option value="Caprino">Caprino</option>
                                    <option value="Equino">Equino</option>
                                </select>
                                
                            </div>
                              <div class="form-group">
                                  <label>Nombre</label>
                                  <input type="text" class="form-control" name="nombre" value="{{$data->nombre}}" required>
                              </div> 
                              <div class="form-group">
                                <label>Sexo</label>
                                <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="sexo">
                                    <option value="{{$data->sexo}}">{{$data->sexo}}</option>
                                    <option value="F">F</option>
                                    <option value="M">M</option>
                                </select>
                              </div>

                              <div class="form-group">
                                  <label>ID Madre </label>
                                  <input type="number" class="form-control" name="id_madre" value="{{$data->id_madre}}" required>
                              </div>
          
                              <div class="form-group">
                                  <label>ID Padre  </label>
                                  <input type="number" class="form-control" name="id_padre" value="{{$data->id_padre}}" required>
                              </div>    

                              <div class="form-group">
                                <label>Fecha Nacimiento </label>
                                <input type="date" class="form-control" name="fecha_nacimiento" value="{{$data->fecha_nacimiento}}" required > 
                              </div>
                              
                          </div>
                          <div class="col-md-4">
    
                          <div class="form-group">
                              <label>Peso Nacimiento</label>
                              <input type="number" step="any" class="form-control" name="peso_nacimiento" value="{{$data->peso_nacimiento}}" required>
                          </div>
      
                          <div class="form-group">
                            <label>Fecha Destete </label>
                            <input type="date" class="form-control" name="fecha_destete" value="{{$data->fecha_destete}}" required > 
                          </div>
    
                            <div class="form-group">
                              <label>Peso Destete</label>
                              <input type="number" step="any" class="form-control" name="peso_destete" value="{{$data->peso_destete}}" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Fecha Compra </label>
                                <input type="date" class="form-control" name="fecha_compra" value="{{$data->fecha_compra}}" required > 
                            </div>

                            <div class="form-group">
                              <label>Fecha Salida </label>
                              <input type="date" class="form-control" name="fecha_salida"  value="{{$data->fecha_salida}}" required > 
                            </div>

                            <div class="form-group">
                              <label>Tipo Salida</label>
                              <input type="number" step="1" class="form-control" name="tipo_salida" value="{{$data->tipo_salida}}" required>
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Comentario Salida</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario_salida" >{{$data->comentario_salida}}</textarea>
                            </div>
                              
                          </div>
                          <div class="col-md-4">

                              <div class="form-group">
                                  <label>Raza</label>
                                  <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="raza">
                                      <option value="{{$data->raza}}">{{$data->raza}}</option>
                                      <option value="Pardo Aleman">Pardo Aleman</option>
                                      <option value="F1 Pardo x Guzerat">F1 Pardo x Guzerat</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label>Hato</label>
                                  <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="hato">
                                      <option value="{{$data->hato}}">{{$data->hato}}</option>
                                      <option value="Lechero">Lechero</option>
                                      <option value="Carne">Carne</option>
                                      <option value="Doble Proposito">Doble Proposito</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label>Marca</label>
                                  <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="marca">
                                      <option value="{{$data->marca}}">{{$data->marca}}</option>
                                      <option value="XZ4">XZ4</option>
                                      <option value="M8N">M8N</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label>Capa</label>
                                  <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="capa">
                                      <option value="{{$data->capa}}">{{$data->capa}}</option>
                                      <option value="Parda">Parda</option>
                                      <option value="Blanca">Blanca</option>
                                      <option value="Griz">Griz</option>
                                      <option value="Blanco">Blanco</option>
                                      <option value="Rojo">Rojo</option>
                                  </select>
                              </div>

                              <div class="form-group mb-5">
                                  <label for="exampleInputEmail1">Tipo Animal </label>
                                  <input type="text" class="form-control" name="tipo_animal" value="{{$data->tipo_animal}}" required>
                              </div>
          
                              <button type="submit" class="btn btn-success">Actualizar</button>
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

