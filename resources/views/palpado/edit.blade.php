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
                        <h5  class="font-weight-bold">Palpados Edit</h5>

                        <a href="{{route('palpados')}}" class="btn btn-info mb-4">Palpados</a>
                        
                      <form action="{{route('palpados.update', $data->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                          <div class="row">
                            <div class="col-md-4">
                            
                                <div class="form-group">
                                  <label>Hembra</label>
                                  <select class="form-select form-select-lg mb-3 form-control js-example-basic-single"  aria-label=".form-select-lg example" name="id_hembra">
                                    @foreach ($hembras as $item)
                                      @if ($item->id == $data->id_hembra)
                                      <option value="{{$item->id}}">{{$item->nombre}} - {{$item->id}}</option>
                                      @endif
                                    @endforeach
                                    <option>--------------</option>
                                      @foreach ($hembras as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}} - {{$item->id}}</option>
                                      @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label>Fecha</label>
                                  <input type="date" id="meeting-time" class="form-control" name="fecha" value="{{$data->fecha}}">                                  
                                
                                </div>
                    
                                <div class="form-group">
                                  <label>Metodo</label>
                                  <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="metodo">
                                    <option value="{{$data->metodo}}">{{$data->metodo}}</option>
                                    <option value="Palpado rectal">Palpado rectal</option>
                                    <option value="Ultrasonido">Ultrasonido</option>
                                    <option value="Observacion">Observacion</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label>Estado</label>
                                  <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="estado">
                                    <option value="{{$data->estado}}">{{$data->estado}}</option>
                                    <option value="Prenada">Prenada</option>
                                    <option value="Ciclando">Ciclando</option>
                                    <option value="Estatica">Estatica</option>
                                    <option value="Aborto">Aborto</option>
                                  </select>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Diagnostico</label>
                                    <textarea name="diagnostico" rows="5" cols="5" class="form-control" name="diagnostico">{{$data->diagnostico}}</textarea>
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


@section('js')
  <script>
    $(document).ready(function() {
      $('.js-example-basic-single').select2();
    });
  </script>
@endsection()
