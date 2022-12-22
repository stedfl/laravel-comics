<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    @vite('resources/js/app.js')

    <link rel='icon shortcut' href='{{asset('img/favicon.ico')}}' type="image/x-icon">
    <title>DC Comics @yield('title')</title>
</head>
<body>
    @include('partials.header')
    @include('partials.jumbotron')

    @yield('content')

    @include('partials.footer')

</body>
</html>
