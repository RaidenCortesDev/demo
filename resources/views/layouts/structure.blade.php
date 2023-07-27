<!DOCTYPE html>
<html>

<head>
    <title>Demo</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    @yield('content')

    <!-- Agregar los archivos JS de Bootstrap -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- O puedes usar la versión individual de los archivos JS si prefieres: -->
    <!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> -->

</body>

</html>
