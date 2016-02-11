<!DOCTYPE html>
<html ng-app>
    <head>
        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset(('css/main.css')) }}">

    </head>
    <body>
    <div id="wrapper">

        <div id="wrapper">
            @yield('content')
        </div>
    </div>
    </body>
    <script src="{{ asset(('js/all.js')) }}"></script>

</html>
