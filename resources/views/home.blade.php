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
            <td>
                
                <form action="{{action('autosController@destroy', $auto)}}" method="post">
                {{csrf_field()}}
                <a href="{{action('autosController@edit', $auto)}}" class="btn btn-primary">Edit</a>
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach    
    </table>
</div>
    


@endsection