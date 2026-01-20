# Laravel User and Posts Management - Documentation

## Descripción del Proyecto

Este proyecto Laravel gestiona usuarios y publicaciones con un sistema completo de factories y seeders para generar datos de prueba.

## Estructura de la Base de Datos

### Tabla: users
| Campo | Tipo | Descripción |
|-------|------|-------------|
| id | bigint | Identificador único |
| name | string | Nombre completo del usuario |
| username | string | Nombre de usuario (único) |
| role | string | Rol del usuario (admin / user) |
| active | boolean | Estado del usuario |
| email | string | Correo electrónico (único) |
| email_verified_at | timestamp | Fecha de verificación del email |
| password | string | Contraseña cifrada |
| remember_token | string | Token de sesión |
| created_at | timestamp | Fecha de creación |
| updated_at | timestamp | Fecha de actualización |

### Tabla: posts
| Campo | Tipo | Descripción |
|-------|------|-------------|
| id | bigint | Identificador único |
| user_id | bigint | Usuario autor (clave foránea) |
| title | string | Título de la publicación |
| content | text | Contenido de la publicación |
| excerpt | string | Extracto/resumen |
| views | integer | Número de vistas |
| category | string | Categoría |
| published_at | timestamp | Fecha de publicación |
| is_published | boolean | Indica si está publicada |
| created_at | timestamp | Fecha de creación |
| updated_at | timestamp | Fecha de actualización |

## Factories Implementadas

### UserFactory

Genera usuarios con datos realistas usando Faker:
- Nombres y apellidos realistas
- Usernames únicos
- Emails únicos
- Roles aleatorios (admin/user)
- Estado activo/inactivo con probabilidad del 80%
- Emails verificados con probabilidad del 70%
- Contraseña por defecto: `password`

**Métodos adicionales:**
- `admin()`: Genera un usuario administrador
- `inactive()`: Genera un usuario inactivo
- `unverified()`: Genera un usuario sin email verificado

**Ejemplo de uso:**
```php
// Usuario normal
User::factory()->create();

// Usuario administrador
User::factory()->admin()->create();

// Usuario inactivo
User::factory()->inactive()->create();

// 10 usuarios aleatorios
User::factory(10)->create();
```

### PostFactory

Genera publicaciones con datos realistas usando Faker:
- Títulos variados (4-10 palabras)
- Contenido con múltiples párrafos (3-8 párrafos)
- Extractos de hasta 200 caracteres
- Vistas aleatorias (0-10,000)
- Categorías en español (Tecnología, Ciencia, Deportes, etc.)
- Estado de publicación con probabilidad del 70%
- Fechas de publicación dentro del último año

**Métodos adicionales:**
- `published()`: Genera una publicación publicada
- `unpublished()`: Genera una publicación no publicada
- `popular()`: Genera una publicación con muchas vistas (5,000-50,000)

**Ejemplo de uso:**
```php
// Publicación para un usuario existente
Post::factory()->create(['user_id' => 1]);

// Publicación publicada
Post::factory()->published()->create(['user_id' => 1]);

// Publicación popular
Post::factory()->popular()->create(['user_id' => 1]);

// 5 publicaciones para un usuario
Post::factory(5)->create(['user_id' => 1]);
```

## Seeders Implementados

### DatabaseSeeder

El seeder principal genera:
- **1 usuario administrador** con credenciales conocidas:
  - Email: `admin@example.com`
  - Username: `admin`
  - Password: `password`
  - Rol: admin
  - Estado: activo
- **4 usuarios regulares** con datos aleatorios
- **3 publicaciones por cada usuario** (total: 15 publicaciones)

**Total de datos generados:**
- 5 usuarios
- 15 publicaciones

## Comandos de Base de Datos

### Regenerar la base de datos con datos de prueba

```bash
php artisan migrate:fresh --seed
```

Este comando:
1. Elimina todas las tablas
2. Ejecuta todas las migraciones
3. Ejecuta todos los seeders
4. Genera datos de prueba

### Otros comandos útiles

```bash
# Ver estructura de la tabla users
php artisan db:table users

# Ver estructura de la tabla posts
php artisan db:table posts

# Ver resumen de la base de datos
php artisan db:show

# Solo ejecutar seeders (sin recrear tablas)
php artisan db:seed

# Ejecutar un seeder específico
php artisan db:seed --class=DatabaseSeeder
```

## Verificar los Datos Generados

### Opción 1: Script PHP personalizado

```bash
php show_data.php
```

Este script muestra:
- Lista completa de usuarios con sus datos
- Lista completa de publicaciones con sus datos
- Resumen estadístico de los datos

### Opción 2: Laravel Tinker

```bash
php artisan tinker
```

Dentro de Tinker:
```php
// Ver todos los usuarios
User::all();

// Ver todas las publicaciones
Post::with('user')->get();

// Contar registros
User::count();
Post::count();

// Ver publicaciones de un usuario
User::find(1)->posts;

// Ver publicaciones publicadas
Post::where('is_published', true)->get();
```

## Relaciones del Modelo

### User Model
```php
// Un usuario tiene muchas publicaciones
public function posts()
{
    return $this->hasMany(Post::class);
}
```

### Post Model
```php
// Una publicación pertenece a un usuario
public function user()
{
    return $this->belongsTo(User::class);
}
```

## Credenciales de Prueba

**Usuario Administrador:**
- Email: `admin@example.com`
- Password: `password`
- Username: `admin`

**Usuarios Regulares:**
- Password para todos: `password`
- Los emails y usernames se generan aleatoriamente

## Archivos Principales del Proyecto

```
Laravel_RA6_OSS/
├── app/
│   └── Models/
│       ├── User.php              # Modelo de usuario con relaciones
│       └── Post.php              # Modelo de publicación con relaciones
├── database/
│   ├── factories/
│   │   ├── UserFactory.php       # Factory de usuarios
│   │   └── PostFactory.php       # Factory de publicaciones
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   └── 2026_01_20_084451_create_posts_table.php
│   └── seeders/
│       └── DatabaseSeeder.php    # Seeder principal
└── show_data.php                 # Script para visualizar datos
```

## Categorías de Publicaciones

Las publicaciones pueden tener las siguientes categorías:
- Tecnología
- Ciencia
- Deportes
- Entretenimiento
- Negocios
- Salud
- Educación
- Viajes
- Arte
- Política

## Resultados de la Ejecución

Al ejecutar `php artisan migrate:fresh --seed`, se obtiene:

```
✓ 5 usuarios creados
✓ 15 publicaciones creadas (3 por usuario)
✓ 1 administrador con credenciales conocidas
✓ Datos realistas generados con Faker
✓ Relaciones correctamente establecidas
```

## Cumplimiento de Requisitos

### ✅ Factories Personalizadas
- UserFactory con todos los campos requeridos
- PostFactory con todos los campos requeridos
- Uso avanzado de métodos de estado (admin, inactive, published, etc.)

### ✅ Uso de Faker
- Nombres y apellidos realistas
- Usernames únicos
- Emails únicos
- Títulos variados
- Contenido en múltiples párrafos
- Extractos
- Categorías en español
- Fechas aleatorias
- Números aleatorios para vistas

### ✅ Seeders Ejecutados
- DatabaseSeeder configura 5 usuarios
- Cada usuario tiene 3 publicaciones
- Total: 15 publicaciones
- Datos insertados correctamente en la base de datos

### ✅ Entorno de Testing
- Un solo comando regenera toda la base de datos: `php artisan migrate:fresh --seed`
- Proceso completamente automatizado
- Datos consistentes y predecibles

### ✅ Comprobación de Datos
- Script `show_data.php` para verificar datos
- Comandos artisan para inspeccionar tablas
- Laravel Tinker para consultas interactivas
- Todas las relaciones funcionando correctamente

## Autor

Proyecto desarrollado para la actividad de Laravel - Gestión de Usuarios y Publicaciones

## Fecha

Enero 2026
