<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>ABM LARAVEL</title>
    
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="home">Laravel.test</a>
            </div>
            <ul class="nav navbar-nav">
            <!-- <li><a href="home">Inicio</a></li> -->
            <li><a href="{{action('autosController@create')}}">Nuevo</a></li>
            <li><a href="/">Lista</a></li>
            <li><a href="/json">Json</a></li>
            <!-- <li><a href="eliminar">Page 3</a></li> -->
            </ul>
        </div>      
    </nav>

    @yield('content')
    
</body>
</html>