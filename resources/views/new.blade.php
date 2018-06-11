@extends('layout')

@section('content')


    @if ($auto->id=='')
      <form class="form-horizontal col-xs-12" method="post" action="{{url('autos')}}">
      @else
      <form class="form-horizontal col-xs-12" method="post" action="{{action('autosController@update', $auto)}}">
      <input name="_method" type="hidden" value="PATCH">
      @endif

    {{ csrf_field() }}
    <fieldset>

    <!-- Form Name -->
    @if ($auto->id=='')
      <legend>Nuevo Auto</legend>
      @else
      <legend>Modificar Auto</legend>
      @endif

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="marca">Marca</label>  
      <div class="col-md-4">
      <input id="marca" name="marca" placeholder="marca del auto" class="form-control input-md" required="" type="text" value="{{$auto->marca}}">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="modelo">Modelo</label>  
      <div class="col-md-4">
      <input id="modelo" name="modelo" placeholder="modelo del auto" class="form-control input-md" type="text" value="{{$auto->modelo}}">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="anyo">Año</label>  
      <div class="col-md-4">
      <input id="anyo" name="anyo" placeholder="año de fabricación" class="form-control input-md" type="text" value="{{$auto->anyo}}">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="patente">Patente</label>  
      <div class="col-md-4">
      <input id="patente" name="patente" placeholder="dominio letras y números" class="form-control input-md" type="text" value="{{$auto->patente}}">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="color">Color</label>  
      <div class="col-md-4">
      <input id="color" name="color" placeholder="color del auto" class="form-control input-md" type="text" value="{{$auto->color}}">
        
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