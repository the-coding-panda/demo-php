<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My App - @yield('title')</title>
</head>
<body>
<h1>My Application @yield('title')</h1>
<div>
    @yield('content')
</div>
</body>
</html>
