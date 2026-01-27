<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Laravel RA7 OSS'); ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            padding: 30px;
        }
        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }
        header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        header p {
            font-size: 1.1em;
            opacity: 0.9;
        }
        nav {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        nav a {
            color: #667eea;
            text-decoration: none;
            padding: 10px 20px;
            background: white;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
        }
        nav a:hover {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
        }
        .content {
            padding: 20px 0;
        }
        footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            color: #666;
            border-top: 2px solid #eee;
        }
    </style>
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <div class="container">
        <header>
            <h1>📚 Laravel RA7 OSS</h1>
            <p>Sistema de Gestión de Usuarios y Publicaciones</p>
        </header>

        <nav>
            <ul>
                <li><a href="<?php echo e(route('users.index')); ?>">👥 Todos los Usuarios</a></li>
                <li><a href="<?php echo e(route('users.with-posts')); ?>">✍️ Usuarios con Posts</a></li>
                <li><a href="<?php echo e(route('posts.index')); ?>">📝 Todas las Publicaciones</a></li>
                <li><a href="<?php echo e(route('posts.published')); ?>">✅ Posts Publicados</a></li>
            </ul>
        </nav>

        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <footer>
            <p>&copy; 2026 Oscar Sánchez Serrano (OSS) - Laravel RA7</p>
        </footer>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\Laravel_RA7_OSS\resources\views/layout/app.blade.php ENDPATH**/ ?>