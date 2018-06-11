@extends('layout')

@section('content')


    <form class="form-horizontal col-xs-12" method="POST" action="{{ url('autos.store')}}">
    {{ csrf_field() }}
    <fieldset>

    <!-- Form Name -->
    <legend>Nuevo Auto</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="marca">Marca</label>  
      <div class="col-md-4">
      <input id="marca" name="marca" placeholder="marca del auto" class="form-control input-md" required="" type="text">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="modelo">Modelo</label>  
      <div class="col-md-4">
      <input id="modelo" name="modelo" placeholder="modelo del auto" class="form-control input-md" type="text">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="anyo">Año</label>  
      <div class="col-md-4">
      <input id="anyo" name="anyo" placeholder="año de fabricación" class="form-control input-md" type="text">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="patente">Patente</label>  
      <div class="col-md-4">
      <input id="patente" name="patente" placeholder="dominio letras y números" class="form-control input-md" type="text">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="color">Color</label>  
      <div class="col-md-4">
      <input id="color" name="color" placeholder="color del auto" class="form-control input-md" type="text">
        
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="guardar">Guardar</label>
      <div class="col-md-4">
        <button id="guardar" name="guardar" class="btn btn-success">Guardar</button>
      </div>
    </div>

    </fieldset>
    </form>

@endsection