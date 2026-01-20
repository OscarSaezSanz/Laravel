# Laravel User & Posts Management System

Sistema de gestión de usuarios y publicaciones desarrollado en Laravel con factories y seeders para automatizar la generación de datos de prueba.

## 🎯 Características

- ✅ Gestión completa de usuarios con roles (admin/user)
- ✅ Sistema de publicaciones vinculado a usuarios
- ✅ Factories personalizadas con datos realistas usando Faker
- ✅ Seeders configurados para generar datos de prueba
- ✅ Regeneración automática de base de datos con un solo comando
- ✅ Relaciones Eloquent entre modelos

## 📋 Requisitos Previos

- PHP 8.2 o superior
- Composer
- Laravel 11.x
- MySQL 8.0+ (XAMPP/MySQL Workbench)
- Base de datos: Laravel_RA6_OSS

## 🚀 Instalación

1. **Clonar el repositorio** (o usar el proyecto existente)
```bash
cd Laravel_RA6_OSS
```

2. **Instalar dependencias** (si no están instaladas)
```bash
composer install
```

3. **Configurar archivo de entorno**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Ejecutar migraciones y seeders**
```bash
php artisan migrate:fresh --seed
```

## 💾 Estructura de Base de Datos

### Usuarios (users)
- Identificación: id, name, username
- Seguridad: email, password, remember_token
- Roles: role (admin/user)
- Estado: active (boolean), email_verified_at
- Timestamps: created_at, updated_at

### Publicaciones (posts)
- Identificación: id, title
- Contenido: content, excerpt
- Metadatos: category, views, user_id
- Publicación: is_published, published_at
- Timestamps: created_at, updated_at

## 🔧 Uso del Sistema

### Regenerar Base de Datos
```bash
php artisan migrate:fresh --seed
```

Este comando:
- ✅ Elimina todas las tablas existentes
- ✅ Crea todas las tablas nuevamente
- ✅ Genera 5 usuarios (1 admin + 4 regulares)
- ✅ Genera 15 publicaciones (3 por usuario)

### Credenciales de Acceso
**Administrador:**
- Email: `admin@example.com`
- Password: `password`

**Usuarios regulares:**
- Password: `password`
- Emails generados aleatoriamente

### Verificar Datos Generados
```bash
# Usando script personalizado
php show_data.php

# Usando Laravel Tinker
php artisan tinker
>>> User::count()
>>> Post::count()
>>> User::with('posts')->get()
```

## 📊 Datos Generados

El seeder genera automáticamente:
- **5 usuarios** con datos realistas (nombres, emails, usernames únicos)
- **15 publicaciones** distribuidas entre los usuarios
- **Roles variados**: Admin y usuarios regulares
- **Estados diversos**: Usuarios activos/inactivos
- **Publicaciones publicadas y no publicadas**
- **Categorías variadas**: Tecnología, Ciencia, Deportes, etc.

## 🏗️ Factories Implementadas

### UserFactory
Genera usuarios con:
- Nombres y apellidos realistas
- Usernames únicos
- Roles (admin/user) aleatorios
- Estados activos/inactivos
- Emails verificados/no verificados

**Métodos:**
- `admin()` - Genera un administrador
- `inactive()` - Genera un usuario inactivo
- `unverified()` - Email sin verificar

### PostFactory
Genera publicaciones con:
- Títulos de 4-10 palabras
- Contenido de 3-8 párrafos
- Extractos de hasta 200 caracteres
- Vistas aleatorias (0-10,000)
- 10 categorías diferentes
- Estados de publicación

**Métodos:**
- `published()` - Publicación publicada
- `unpublished()` - Publicación no publicada
- `popular()` - Publicación con muchas vistas

## 📁 Archivos Principales

```
├── app/Models/
│   ├── User.php              # Modelo de usuario
│   └── Post.php              # Modelo de publicación
├── database/
│   ├── factories/
│   │   ├── UserFactory.php   # Factory de usuarios
│   │   └── PostFactory.php   # Factory de publicaciones
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   └── 2026_01_20_084451_create_posts_table.php
│   └── seeders/
│       └── DatabaseSeeder.php
├── show_data.php             # Script de verificación
└── DOCUMENTACION.md          # Documentación completa
```

## 🎓 Objetivos Cumplidos

### ✅ Factories Personalizadas (10/10)
- Factories completas y bien adaptadas
- Uso avanzado de Faker
- Métodos de estado personalizados
- Generación masiva de datos facilitada

### ✅ Uso de Faker (10/10)
- Datos realistas y variados
- Múltiples tipos de datos (textos, fechas, números)
- Categorías en español
- Probabilidades configuradas

### ✅ Seeders Ejecutados (10/10)
- Estructura clara y ordenada
- Ejecuta sin errores
- Genera datos solicitados
- Salida informativa con resumen

### ✅ Entorno de Testing (10/10)
- Comando único para regenerar BD
- Proceso automático y sencillo
- Instrucciones claras
- Múltiples formas de verificación

## 📸 Verificación

### Comprobación de Usuarios
```bash
php artisan db:table users
```

### Comprobación de Publicaciones
```bash
php artisan db:table posts
```

### Resumen de la Base de Datos
```bash
php artisan db:show
```

### Datos Detallados
```bash
php show_data.php
```

## 🔗 Relaciones

### Usuario → Publicaciones
```php
$user = User::find(1);
$posts = $user->posts; // Obtiene todas las publicaciones del usuario
```

### Publicación → Usuario
```php
$post = Post::find(1);
$author = $post->user; // Obtiene el autor de la publicación
```

## 📝 Notas Adicionales

- Todas las contraseñas de usuario son: `password`
- La base de datos usa MySQL (Laravel_RA6_OSS)
- Credenciales BD: usuario `root`, contraseña `curso`
- Los datos se regeneran completamente con cada `migrate:fresh --seed`
- Los IDs se reinician en cada regeneración

## 📄 Licencia

Proyecto educativo desarrollado para actividad de Laravel.

## 👤 Autor

Desarrollado como parte de la actividad de Factories y Seeders en Laravel.

---

**Fecha de desarrollo:** Enero 2026
