<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <script src="https://use.fontawesome.com/e2e564c6e8.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


</head>
<body>
    <div id="app">

        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand">LookingPrice</a>
            <form class="form-inline">
                <input class="form-control mx-sm-3" type="search" placeholder="Produto.." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>



            @if(Auth::check())
                <a href="">Home</a>
            @else
                <i class="fa fa-users mr-sm-2">   <a  href="{{route('auth.login')}}">Login</a></i>

                <i class="fa fa-users">   <a  href="{{route('auth.register')}}">Registrar</a></i>
                {{--<a  href="{{route('auth.login')}}">Login</a>--}}

            @endif
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <footer class="bd-footer text-muted navbar navbar-light" style="background-color: #;">
        <div class="footer">

            <p>Deseja anunciar <a href="#" target="_blank">Clique Aki</a></p>

        </div>
    </footer>

<style>
    .footer{
        position: absolute;
        background-color: gainsboro;
        height: 40px;
        width: 100%;

        z-index: 1;
    }
</style>

</body>
</html>
