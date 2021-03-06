@extends('layouts.master')

@section('content')
<div class="content-wrapper">    
  <section class="content-header">
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
                            <h5  class="font-weight-bold">Servicio Detail</h5>

                            <a href="{{route('servicios')}}" class="btn btn-info mb-4">Servicios</a>
                            <div class="box-body" style="">
                                <div class="row">
                                  <div class="container">
                                      
                                    <div class="row">
                                        <div class="col-md-6">
                                          <div class="card" style="width: 18rem;">
                                              <ul class="list-group list-group-flush">
                                                <li class="list-group-item"> 
                                                    <label style="font-weight:bold">Animal : </label> <span> {{$data->animal->nombre}}</span></li>
                                                <li class="list-group-item">
                                                    <label style="font-weight:bold">Reproductor :</label> {{$data->reproductor->nombre}}
                                                </li>
                                                <li class="list-group-item">                                    
                                                    <label style="font-weight:bold">Hora de Inseminacion : </label> {{$data->hora_inseminacion}}
                                                </li>
                                                <li class="list-group-item">                                    
                                                    <label style="font-weight:bold">Tipo de Reproduccion : </label> {{$data->tipo_reproduccion}}
                                                </li>
                                                <li class="list-group-item">                                    
                                                    <label style="font-weight:bold">Inseminador : </label> {{$data->inseminador}}
                                                </li>
                                                <li class="list-group-item">                                    
                                                    <label style="font-weight:bold">Resposanble : </label> {{$data->responsable->name}}
                                                </li>
                                              
                                              </ul>
                                          
                                          </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                          <div class="card" style="width: 18rem;">
                                              <ul class="list-group list-group-flush">
                                                <li class="list-group-item"> 
                                                    <label style="font-weight:bold">Pre??ada : </label> <span> {{$data->prenada? 'Si' : 'No'}}</span></li>
                                                <li class="list-group-item">
                                                    <label style="font-weight:bold">Comentario :</label> {{$data->comentario}}
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

