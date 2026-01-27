<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel RA7 OSS')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #d1d5db;
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 4px;
            border: 1px solid #d1d5db;
            padding: 30px;
        }
        header {
            background: #4b5563;
            color: white;
            padding: 20px;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
        }
        header h1 {
            font-size: 2em;
            margin-bottom: 5px;
            font-weight: 600;
        }
        header p {
            font-size: 1.1em;
            opacity: 0.9;
        }
        nav {
            background: #f9fafb;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
            border: 1px solid #d1d5db;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        nav a {
            color: #374151;
            text-decoration: none;
            padding: 8px 16px;
            background: white;
            border-radius: 3px;
            font-weight: 500;
            border: 1px solid #d1d5db;
        }
        nav a:hover {
            background: #e5e7eb;
            color: #111827;
        }
        .content {
            padding: 20px 0;
        }
        footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            color: #6b7280;
            border-top: 1px solid #e5e7eb;
        }
    </style>
    @yield('styles')
</head>
<body>
    <div class="container">
        <header>
            <h1>Laravel RA7 OSS</h1>
            <p>Sistema de Gestión de Usuarios y Publicaciones</p>
        </header>

        <nav>
            <ul>
                <li><a href="{{ route('users.index') }}">Todos los Usuarios</a></li>
                <li><a href="{{ route('users.with-posts') }}">Usuarios con Posts</a></li>
                <li><a href="{{ route('posts.index') }}">Todas las Publicaciones</a></li>
                <li><a href="{{ route('posts.published') }}">Posts Publicados</a></li>
            </ul>
        </nav>

        <div class="content">
            @yield('content')
        </div>

        <footer>
            <p>&copy; 2026 Oscar Saez Sanz (OSS) - Laravel RA7</p>
        </footer>
    </div>
</body>
</html>
