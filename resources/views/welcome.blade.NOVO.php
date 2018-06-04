<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>LookingPrice</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


</head>
<body>
<div id="app"></div>


<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-center">LookingPrice</a>
    <form class="form-inline">
        <input class="form-control mr-0" type="search" placeholder="Produto.." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>



        @if(Auth::check())
        <a class="mdl-navigation__link" style="color:black" href="">Home</a>
        @else
        <i class="material-icons" style="color:black">fingerprint</i>
        <a class="mdl-navigation__link" style="color:black" href="{{route('auth.login')}}">Login</a>

        <i class="material-icons" style="color:black">person_add</i>
        <a class="mdl-navigation__link" style="color:black" href="{{route('auth.register')}}">Registrar</a>
        @endif

</nav>



@yield('conteudo')


<footer class="bd-footer text-muted" class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container">

        <p>Deseja anunciar <a href="https://twitter.com/mdo" target="_blank">@mdo</a></p>

    </div>
</footer>



</body>
</html>