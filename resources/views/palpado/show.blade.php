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
                            <h5  class="font-weight-bold">Palpado Detail</h5>

                            <a href="{{route('palpados')}}" class="btn btn-info mb-4">Palpados</a>
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
                                                    <label style="font-weight:bold">Metodo : </label> {{$data->metodo}}
                                                </li>
                                                <li class="list-group-item">                                    
                                                    <label style="font-weight:bold">Estado : </label> {{$data->estado}}
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
                                                    <label style="font-weight:bold">Diagnostico :</label> {{$data->diagnostico}}
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

