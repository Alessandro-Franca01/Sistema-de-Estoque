<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <!-- navbar-light bg-light -->
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('Pagina inicial') }}"> Almoxarifado </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="{{ route('login') }}" role="button" aria-haspopup="true" aria-expanded="false">Login</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('register') }}" role="button" aria-haspopup="true" aria-expanded="false">Cadastro</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('Pagina inicial') }}">Inicio</a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
