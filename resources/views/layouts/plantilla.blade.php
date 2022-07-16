<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <style>
         .active {
            color: red;
            font-weight: bold;
         }
    </style>
</head>
<body>
    @include('layouts.partials.header')
    <h1>@yield('content')</h1>
    @include('layouts.partials.footer')
</body>        
</html>
