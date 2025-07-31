<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'ClockWork' }}</title>

    <!-- Fuentes -->

    <!-- Estilos personalizados -->
    @vite(['resources/css/styles.css'])

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
</head>
<body>
    <!-- Barra de navegación -->
    @unless (isset($hideNavbar) && $hideNavbar)
        @include('layout.navbar')
    @endunless

    <!-- Sidebar -->
    @unless (isset($hideSidebar) && $hideSidebar)
        @include('layout.sidebar')
    @endunless

    <!-- Contenido principal -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    @unless (isset($hideFooter) && $hideFooter)
        @include('layout.footer')
    @endunless

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>