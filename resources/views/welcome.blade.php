<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-red.min.css"/>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>


    <title>LookingPrice</title>


</head>
<body>

<div class="demo-layout-transparent mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title"></span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <nav class="mdl-navigation">
                @if(Auth::check())
                    <a class="mdl-navigation__link" style="color:black" href="">Home</a>
                @else
                    <i class="material-icons" style="color:black">fingerprint</i>
                    <a class="mdl-navigation__link" style="color:black" href="{{route('auth.login')}}">Login</a>

                    <i class="material-icons" style="color:black">person_add</i>
                    <a class="mdl-navigation__link" style="color:black" href="{{route('auth.register')}}">Registrar</a>
                @endif
            </nav>


        </div>
    </header>

    <main class="mdl-layout__content">

        <h1>Looking Price</h1>


    </main>
</div>


</div>


</body>
</html>
