<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Users & Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background: #f5f5f5;
        }

        h1, h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-bottom: 30px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background: #333;
            color: white;
        }

        tr:hover {
            background: #f9f9f9;
        }

        .stats {
            background: white;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Laravel Users & Posts Management</h1>
    
    <div class="stats">
        <strong>Estadísticas:</strong> 
        {{ $stats['total_users'] }} usuarios | 
        {{ $stats['total_posts'] }} publicaciones | 
        {{ $stats['admin_users'] }} admins | 
        {{ $stats['published_posts'] }} publicados
    </div>

    <h2>Usuarios</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Username</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Posts</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->active ? 'Activo' : 'Inactivo' }}</td>
                <td>{{ $user->posts_count }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Publicaciones</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Categoría</th>
                <th>Vistas</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ Str::limit($post->title, 60) }}</td>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->category }}</td>
                <td>{{ $post->views }}</td>
                <td>{{ $post->is_published ? 'Publicado' : 'Borrador' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
