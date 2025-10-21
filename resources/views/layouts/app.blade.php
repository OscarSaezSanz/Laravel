<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>AE_OSS - Gestión de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/estilos_oss.css') }}" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white p-3 text-center">
        <h1>Aplicación AE_OSS</h1>
    </header>

    <main class="container my-4">
        @yield('content')
    </main>

    <footer class="bg-light text-center p-3">
        <small>&copy; {{ date('Y') }} AE_OSS - Todos los derechos reservados</small>
    </footer>
</body>
</html>
