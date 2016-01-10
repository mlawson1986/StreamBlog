<!DOCTYPE html>

<html>
    <head>
        <title>{{ isset($pageTitle) ? $pageTitle : '' }}</title>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css') }}"/>
    </head>

    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ URL::asset('i/sb-brand.png') }}"/></a>
            </div>
        </div>
    </nav>
    @yield('content')
    <script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>
    </body>
</html>