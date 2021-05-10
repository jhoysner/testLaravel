
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
                      <h5  class="font-weight-bold">Reproductor Create</h5>

                      <a href="{{route('reproductores')}}" class="btn btn-info mb-4">Reproductores</a>
                      <form action="{{route('reproductores.store')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                            
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="nombre" required>
                                </div> 
                                <div class="form-group">
                                    <label>Padre</label>
                                    <input type="text" class="form-control" name="padre" required>
                                </div>                    
            
                                <div class="form-group">
                                    <label>Madre </label>
                                    <input type="text" class="form-control" name="madre" required>
                                </div>
            
                                <div class="form-group">
                                    <label>Padre Padre </label>
                                    <input type="text" class="form-control" name="padre_padre" required>
                                </div>
            
                                <div class="form-group">
                                    <label>Padre Madre </label>
                                    <input type="text" class="form-control" name="padre_madre" required > 
                                </div>
            
                                <div class="form-group">
                                    <label> Madre Padre</label>
                                    <input type="text" class="form-control" name="madre_padre" required>
                                </div>
            
                                <div class="form-group">
                                    <label>Madre Madre </label>
                                    <input type="text" class="form-control" name="madre_madre" required>
                                </div>
            
                                
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Raza</label>
                                    <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="raza">
                                        <option value="Pardo">Pardo</option>
                                        <option value="Guzerat">Guzerat</option>
                                        <option value="Sindhi">Sindhi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="tipo">
                                        <option value="Toro">Toro</option>
                                        <option value="Semen">Semen</option>
                                    </select>
                                    
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

