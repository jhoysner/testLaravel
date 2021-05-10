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
                            <h5  class="font-weight-bold">Reproductor Detail</h5>

                            <a href="{{route('reproductores')}}" class="btn btn-info mb-4">Reproductores</a>
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
                                                <label style="font-weight:bold">Padre :</label> {{$data->padre}}
                                            </li>
                                            <li class="list-group-item">                                    
                                                <label style="font-weight:bold">Madre :</label> {{$data->madre}}
                                            </li>
                                            <li class="list-group-item">                                    
                                                <label style="font-weight:bold">Padre :</label> {{$data->padre}}
                                            </li>
                                            <li class="list-group-item">                                    
                                                <label style="font-weight:bold">Padre Padre :</label> {{$data->padre_padre}}
                                            </li>
                                            <li class="list-group-item">                                    
                                                <label style="font-weight:bold">Padre Madre : </label>{{$data->padre_madre}}
                                            </li>
                                            <li class="list-group-item">                                    
                                                <label style="font-weight:bold">Madre Madre : </label> {{$data->madre_madre}}
                                            </li>
                                            <li class="list-group-item">                                    
                                                <label style="font-weight:bold"> Madre Padre : </label> {{$data->madre_padre}}
                                            </li>
                                            </ul>
                                        
                                        </div>
                                      </div>
                 
                                        <div class="col-md-6">
                                        
                                            <div class="card" style="width: 18rem;">
                                                <ul class="list-group list-group-flush">
                                                <li class="list-group-item"> 
                                                  <label style="font-weight:bold">Raza :</label> {{$data->raza}}
                                                </li>
                                                <li class="list-group-item">
                                                  <label style="font-weight:bold">Tipo : </label>{{$data->tipo}}
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

