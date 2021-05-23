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
                            <h5  class="font-weight-bold">Celo Detail</h5>

                            <a href="{{route('celos')}}" class="btn btn-info mb-4">Celos</a>
                            <div class="box-body" style="">
                                <div class="row">
                                  <div class="container">
                                      
                                    <div class="row">
                                        <div class="col-md-6">
                                          <div class="card" style="width: 18rem;">
                                              <ul class="list-group list-group-flush">
                                                <li class="list-group-item"> 
                                                    <label style="font-weight:bold">Hembra : </label> <span> {{$data->hembra->nombre}}</span>
                                                </li>

                                                <li class="list-group-item">                                    
                                                    <label style="font-weight:bold">Fecha : </label> {{$data->fecha}}
                                                </li>
                                                <li class="list-group-item">                                    
                                                    <label style="font-weight:bold">Hora : </label> {{$data->hora}}
                                                </li>
                                                <li class="list-group-item">                                    
                                                    <label style="font-weight:bold">Tipo : </label> {{$data->tipo}}
                                                </li>
                                                <li class="list-group-item">                                    
                                                    <label style="font-weight:bold">Resposanble : </label> {{$data->id_responsable}}
                                                </li>
                                              
                                              </ul>
                                          
                                          </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                          <div class="card" style="width: 18rem;">
                                              <ul class="list-group list-group-flush">
                                               
                                                <li class="list-group-item">
                                                    <label style="font-weight:bold">Comentario :</label> {{$data->comentarios}}
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

