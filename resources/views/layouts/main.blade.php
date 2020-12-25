<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Я-Евпатория!</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="antialiased bg-gray-100 dark:bg-gray-800 font-sans">
    @include('partials.main-nav')
    @yield('content')
    <footer></footer>
</body>

</html>
