<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100">
    
    @yield('header', view('includes.header'))
    @yield('content')
    @yield('footer', view('includes.footer'))

</body>
</html>