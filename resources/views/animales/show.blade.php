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
                            <h5  class="font-weight-bold">Animal Detail</h5>

                            <a href="{{route('animales')}}" class="btn btn-info mb-4">Animales</a>
                            <div class="box-body" style="">
                                <div class="row">
                                  <div class="container">
                                      
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="card" style="width: 18rem;">
                                            <ul class="list-group list-group-flush">
                                              <li class="list-group-item"> 
                                                  <label style="font-weight:bold">Nombre : </label> <span>{{$data->nombre}}</span></li>
                                              <li class="list-group-item">
                                                  <label style="font-weight:bold">Numero :</label> {{$data->numero}}
                                              </li>
                                              <li class="list-group-item">                                    
                                                  <label style="font-weight:bold">Especie :</label> {{$data->especie}}
                                              </li>
                                              <li class="list-group-item">                                    
                                                  <label style="font-weight:bold">Sexo :</label> {{$data->sexo}}
                                              </li>
                                              <li class="list-group-item">                                    
                                                  <label style="font-weight:bold">IDPadre :</label> {{$data->id_padre}}
                                              </li>
                                              <li class="list-group-item">                                    
                                                  <label style="font-weight:bold">IDMadre : </label>{{$data->id_madre}}
                                              </li>
                                              <li class="list-group-item">                                    
                                                  <label style="font-weight:bold">Fecha Nacimiento : </label> {{$data->fecha_nacimiento}}
                                              </li>
                                              <li class="list-group-item">                                    
                                                  <label style="font-weight:bold">Peso Nacimiento : </label> {{$data->peso_nacimiento}}
                                              </li>
                                              {{-- <li class="list-group-item"> 
                                                <label style="font-weight:bold">Fecha Destete :</label> {{$data->fecha_destete}}
                                              </li> --}}
                                              <li class="list-group-item">
                                                <label style="font-weight:bold">Fecha Compra : </label> {{$data->fecha_compra}}
                                              </li>
                                            </ul>
                                        
                                        </div>
                                      </div>
                 
                                        <div class="col-md-6">
                                        
                                            <div class="card" style="width: 18rem;">
                                                <ul class="list-group list-group-flush">
                                                
                                                  {{-- <li class="list-group-item">
                                                      <label style="font-weight:bold">Fecha Salida :</label> {{$data->fecha_salida}} 
                                                  </li>
                                                  <li class="list-group-item">
                                                      <label style="font-weight:bold">Comentario Salida :</label> {{$data->comentario_salida}} 
                                                  </li> --}}
                                                  <li class="list-group-item">
                                                      <label style="font-weight:bold">Raza :</label> {{$data->raza}} 
                                                  </li>
                                                  <li class="list-group-item">
                                                      <label style="font-weight:bold">Raza :</label> {{$data->raza}} 
                                                  </li>
                                                  <li class="list-group-item">
                                                      <label style="font-weight:bold">Hato :</label> {{$data->hato}} 
                                                  </li>
                                                  <li class="list-group-item">
                                                      <label style="font-weight:bold">Marca :</label> {{$data->marca}} 
                                                  </li>
                                                  <li class="list-group-item">
                                                      <label style="font-weight:bold">Capa :</label> {{$data->capa}} 
                                                  </li>
                                                  
                                                  <li class="list-group-item">
                                                      <label style="font-weight:bold">Tipo Animal :</label> {{$data->tipo_animal}} 
                                                  </li>
                                                
                                                </ul>
                                            
                                            </div>
                                            
                                            
                                        </div>
                                        
            
                                    </div>
                                </div>
                  
                               
                  
                              </div>
                      
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

