<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- CDN DE TAILWIND CSS VERSION 1.9 --}}
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    <!-- favicon -->
    <!-- estilos -->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- header -->
    @include('layouts.partials.header')

    <!-- nav -->
    @yield('content')

    <!-- footer -->
    @include('layouts.partials.footer')
    <!-- script -->
</body>

</html>