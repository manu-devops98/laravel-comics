<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('docuentTitle')</title>
</head>
<body>
    <div class="container">
        @include('guest.partials.header')
        @yield('content')
        @include('guest.partials.footer')
    </div>
</body>
</html>