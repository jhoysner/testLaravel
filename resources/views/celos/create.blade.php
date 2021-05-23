
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
                        <h5  class="font-weight-bold">Celos Create</h5>
                        <a href="{{route('celos')}}" class="btn btn-info mb-4">Celos</a>
                        <form action="{{route('celos.store')}}" method="POST">
                          @csrf
                          <div class="row">
                              <div class="col-md-4">
                              
                                  <div class="form-group">
                                    <label>Hembra</label>
                                    <select class="form-select form-select-lg mb-3 form-control js-example-basic-single"  aria-label=".form-select-lg example" name="id_hembra">
                                        @foreach ($madres as $item)
                                          <option value="{{$item->id}}">{{$item->nombre}} - {{$item->id}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label>Fecha</label>
                                    <input type="date" id="meeting-time" class="form-control" name="fecha">                                  
                                  
                                  </div>
                                  <div class="form-group">
                                    <label>Hora</label>
                                    <input type="time" id="meeting-time" class="form-control" name="hora">                                  
                                  
                                  </div>

                      
                                  <div class="form-group">
                                    <label>Tipo de Celo</label>
                                    <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="tipo">
                                      <option value="Natural">Natural</option>
                                      <option value="Ovsynch">Ovsynch</option>
                                      <option value="Protocolo con dispositivo">Protocolo con dispositivo</option>
                                    </select>
                                  </div>
                              </div>

    
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Comentario</label>
                                      <textarea name="comentario" rows="5" cols="5" class="form-control" name="comentario"></textarea>
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
