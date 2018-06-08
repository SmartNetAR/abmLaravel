@extends('layout')

@section('content')


<legend>Lista de Autos</legend>
<div class="table-responsive" id="comida" class="lala">
    <table class="table table-striped">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Color</th>
            <th>Patente</th>
            <th>Acciones</th>
        </tr>  
              
        @foreach($autos as $auto)
        <tr>
            <td>{{$auto->marca}}</td>
            <td>{{$auto->modelo}}</td>
            <td>{{$auto->anyo}}</td>
            <td>{{$auto->color}}</td>
            <td>{{$auto->patente}}</td>
            <td>modificar y eliminar</td>
        </tr>
    @endforeach    
    </table>
</div>
    


@endsection