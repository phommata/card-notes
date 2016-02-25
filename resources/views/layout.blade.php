<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
{{--    <link rel="stylesheet" href="{{ elixir('css/app.css') }}"/>--}}

    @yield('header')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    @yield('footer')
</body>
</html>