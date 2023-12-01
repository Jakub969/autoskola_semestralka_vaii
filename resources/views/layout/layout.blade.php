<!DOCTYPE html>
<html lang="sk">
<head>
    <title>@yield('title')</title>
</head>
<body>
@include('includes.header')
@yield('content')
@include('includes.footer')
</body>
</html>
