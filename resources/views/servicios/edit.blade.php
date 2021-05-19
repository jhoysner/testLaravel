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
                        <h5  class="font-weight-bold">Servicio Edit</h5>

                        <a href="{{route('servicios')}}" class="btn btn-info mb-4">Servicios</a>
                        
                      <form action="{{route('servicios.update', $data->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                          <div class="col-md-4">
                          
                              <div class="form-group">
                                <label>ID Animal</label>
                                <select class="form-select form-select-lg mb-3 form-control js-example-basic-single"  aria-label=".form-select-lg example" name="id_animal">
                                  @foreach ($madres as $item)
                                    @if ($item->id == $data->id_animal)
                                    <option value="{{$item->id}}">{{$item->nombre}} -{{$item->id}}</option>
                                    @endif
                                  @endforeach
                                  <option>--------------</option>
                                    @foreach ($madres as $item)
                                      <option value="{{$item->id}}">{{$item->nombre}} - {{$item->id}}</option>
                                    @endforeach
                                </select>
                              </div>

                              <div class="form-group">
                                <label>ID Reproductor</label>
                                <select class="form-select form-select-lg mb-3 form-control js-example-basic-single"  aria-label=".form-select-lg example" name="id_reproductor">
                                  @foreach ($reproductores as $item)
                                    @if ($item->id == $data->id_reproductor)
                                    <option value="{{$item->id}}">{{$item->nombre}} -{{$item->id}}</option>
                                    @endif
                                  @endforeach
                                  <option>--------------</option>
                                    @foreach ($reproductores as $item)
                                      <option value="{{$item->id}}">{{$item->nombre}} - {{$item->id}}</option>
                                    @endforeach
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Hora de Inseminacion </label>
                                <input type="datetime-local" id="meeting-time" class="form-control" name="hora_inseminacion" value="{{\Carbon\Carbon::parse($data->hora_inseminacion)->format('Y-m-d\TH:i')}}">                                  
                              
                              </div>
                              <div class="form-group">
                                <label>Tipo de Reproduccion</label>
                                <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="tipo_reproduccion">
                                   <option value="{{$data->tipo_reproduccion}}">{{$data->tipo_reproduccion}}</option>
                                    <option value="Inseminacion">Inseminacion</option>
                                    <option value="Monta Natural">Monta Natural</option>
                                    <option value="Embrion">Embrion</option>
                                </select>
                              </div>
                          </div>


                          <div class="col-md-4">

                         
                              <div class="form-group">
                                  <label>Inseminador</label>
                                  <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="inseminador">
                                    <option value="{{$data->inseminador}}">{{$data->inseminador}}</option>
                                    <option value="Hans">Hans</option>
                                    <option value="Walter Colono">Walter Colono</option>
                                </select>
                              </div>

                              <div class="form-group mb-5">
                                  <label for="exampleInputEmail1">Resposanble </label>
                                  <input type="text" class="form-control" name="responsable" required value="{{$data->responsable}}">

                              </div>
          
                              <button type="submit" class="btn btn-success">Crear</button>
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
