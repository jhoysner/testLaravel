
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
                        <h5  class="font-weight-bold">Palpado Create</h5>
                        <a href="{{route('palpados')}}" class="btn btn-info mb-4">Palpados</a>
                        <form action="{{route('palpados.store')}}" method="POST">
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
                                    <label>Metodo</label>
                                    <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="metodo">
                                      <option value="Palpado rectal">Palpado rectal</option>
                                      <option value="Ultrasonido">Ultrasonido</option>
                                      <option value="Observacion">Observacion</option>
                                    </select>
                                  </div>
                              </div>

    
                              <div class="col-md-4">

                                <div class="form-group">
                                  <label>Estado</label>
                                  <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="estado">
                              			<option value="Prenada">Prenada</option>
                                    <option value="Ciclando">Ciclando</option>
                                    <option value="Estatica">Estatica</option>
                                    <option value="Aborto">Aborto</option>
                                  </select>
                                </div>

                                  <div class="form-group">
                                      <label>Diagnostico</label>
                                      <textarea name="diagnostico" rows="5" cols="5" class="form-control" name="comentario"></textarea>
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
