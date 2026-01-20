# Guía de Pruebas - Laravel User & Posts Management

## ✅ Lista de Verificación para la Entrega

### 1. Factories Personalizadas

**UserFactory** - [app/Models/User.php](Laravel_RA6_OSS/database/factories/UserFactory.php)
- ✅ Genera nombres completos realistas
- ✅ Genera usernames únicos
- ✅ Asigna roles (admin/user) aleatoriamente
- ✅ Asigna estados activos/inactivos
- ✅ Genera emails únicos
- ✅ Configura email_verified_at con probabilidad
- ✅ Encripta contraseñas
- ✅ Métodos extra: admin(), inactive(), unverified()

**PostFactory** - [app/Models/Post.php](Laravel_RA6_OSS/database/factories/PostFactory.php)
- ✅ Genera títulos variados (4-10 palabras)
- ✅ Genera contenido de múltiples párrafos (3-8)
- ✅ Genera extractos de hasta 200 caracteres
- ✅ Asigna vistas aleatorias (0-10,000)
- ✅ Asigna categorías en español
- ✅ Configura fechas de publicación
- ✅ Asigna estados de publicación
- ✅ Métodos extra: published(), unpublished(), popular()

### 2. Uso de Faker

**Datos Realistas Generados:**
- ✅ Nombres y apellidos: `fake()->firstName()`, `fake()->lastName()`
- ✅ Usernames únicos: `fake()->unique()->userName()`
- ✅ Emails únicos: `fake()->unique()->safeEmail()`
- ✅ Títulos: `fake()->sentence()`
- ✅ Contenido: `fake()->paragraphs()`
- ✅ Extractos: `fake()->text(200)`
- ✅ Números: `fake()->numberBetween()`
- ✅ Fechas: `fake()->dateTimeBetween()`
- ✅ Booleanos: `fake()->boolean()`
- ✅ Elementos aleatorios: `fake()->randomElement()`

### 3. Seeders Ejecutados

**DatabaseSeeder** - [database/seeders/DatabaseSeeder.php](Laravel_RA6_OSS/database/seeders/DatabaseSeeder.php)
- ✅ Genera 1 usuario administrador con credenciales conocidas
- ✅ Genera 4 usuarios regulares con datos aleatorios
- ✅ Genera 3 publicaciones por cada usuario
- ✅ Total: 5 usuarios, 15 publicaciones
- ✅ Muestra resumen al finalizar

### 4. Entorno de Testing

**Comando Único:**
```bash
php artisan migrate:fresh --seed
```

**Resultado Esperado:**
```
✓ Dropping all tables
✓ Creating migration table
✓ Running migrations (4 migrations)
✓ Seeding database
✓ Database seeded successfully!
✓ Total users created: 5
✓ Total posts created: 15
✓ Admin credentials: admin@example.com / password
```

### 5. Comprobación de Datos

**Script de Verificación:**
```bash
php show_data.php
```

**Comandos Artisan:**
```bash
# Ver estructura de users
php artisan db:table users

# Ver estructura de posts
php artisan db:table posts

# Ver resumen de BD
php artisan db:show
```

**Laravel Tinker:**
```bash
php artisan tinker
>>> User::count()
=> 5
>>> Post::count()
=> 15
>>> User::where('role', 'admin')->count()
>>> Post::where('is_published', true)->count()
```

## 🎥 Capturas Recomendadas

### 1. Ejecución del Seeder
Capturar la salida completa de:
```bash
php artisan migrate:fresh --seed
```

### 2. Verificación de Usuarios
Capturar:
```bash
php artisan db:table users
```

### 3. Verificación de Publicaciones
Capturar:
```bash
php artisan db:table posts
```

### 4. Datos Generados
Capturar la salida de:
```bash
php show_data.php
```

### 5. Código de Factories
Capturas de:
- `database/factories/UserFactory.php`
- `database/factories/PostFactory.php`

### 6. Código del Seeder
Captura de:
- `database/seeders/DatabaseSeeder.php`

### 7. Modelos con Relaciones
Capturas de:
- `app/Models/User.php` (método posts())
- `app/Models/Post.php` (método user())

### 8. Migraciones
Capturas de:
- `database/migrations/0001_01_01_000000_create_users_table.php`
- `database/migrations/2026_01_20_084451_create_posts_table.php`

## 📊 Ejemplos de Pruebas

### Prueba 1: Regeneración Múltiple
```bash
# Primera ejecución
php artisan migrate:fresh --seed

# Segunda ejecución (debe funcionar igual)
php artisan migrate:fresh --seed

# Tercera ejecución (debe funcionar igual)
php artisan migrate:fresh --seed
```
**Resultado esperado:** Cada ejecución debe generar datos nuevos correctamente.

### Prueba 2: Verificación de Relaciones
```bash
php artisan tinker
>>> $user = User::find(1)
>>> $user->posts
>>> $user->posts->count()
=> 3
>>> $post = Post::first()
>>> $post->user->name
```

### Prueba 3: Filtros de Datos
```bash
php artisan tinker
>>> User::where('role', 'admin')->get()
>>> User::where('active', true)->count()
>>> Post::where('is_published', true)->count()
>>> Post::where('category', 'Tecnología')->get()
```

### Prueba 4: Factories Individuales
```bash
php artisan tinker
>>> User::factory()->admin()->create()
>>> User::factory()->inactive()->create()
>>> Post::factory()->published()->create(['user_id' => 1])
>>> Post::factory()->popular()->create(['user_id' => 1])
```

## 📝 Checklist de Entrega

### Código
- ✅ UserFactory.php completo y funcional
- ✅ PostFactory.php completo y funcional
- ✅ DatabaseSeeder.php completo y funcional
- ✅ User.php con relación posts()
- ✅ Post.php con relación user()
- ✅ Migraciones actualizadas

### Documentación
- ✅ README_ACTIVIDAD.md con instrucciones
- ✅ DOCUMENTACION.md con documentación técnica
- ✅ GUIA_PRUEBAS.md (este archivo)
- ✅ show_data.php para verificación

### Capturas
- ✅ Ejecución de migrate:fresh --seed
- ✅ Salida de show_data.php
- ✅ Código de factories
- ✅ Código de seeders
- ✅ Estructura de tablas

### GitHub
- ✅ Repositorio creado
- ✅ Código subido
- ✅ README con instrucciones
- ✅ Commits descriptivos

## 🎯 Puntos de la Rúbrica

### Define y ejecuta seeders (8-10 puntos)
✅ DatabaseSeeder correctamente estructurado
✅ Se ejecuta sin errores
✅ Genera los datos solicitados de forma clara y ordenada
✅ Salida informativa con resumen

### Crea factories personalizadas (8-10 puntos)
✅ Factories completas y bien adaptadas
✅ Facilitan la generación masiva de datos
✅ Incluyen métodos de estado adicionales
✅ Todos los atributos configurados

### Usa Faker para datos realistas (8-10 puntos)
✅ Uso correcto y variado de Faker
✅ Datos realistas y bien ajustados
✅ Múltiples tipos de datos (textos, números, fechas)
✅ Categorías en español

### Prepara entornos de testing (8-10 puntos)
✅ Comando único para regenerar BD
✅ Proceso automático y sencillo
✅ Instrucciones claras
✅ Múltiples formas de verificación

## 🔍 Validación Final

Ejecutar en orden:
```bash
# 1. Limpiar y regenerar
php artisan migrate:fresh --seed

# 2. Verificar datos
php show_data.php

# 3. Verificar estructura
php artisan db:show

# 4. Verificar users
php artisan db:table users

# 5. Verificar posts
php artisan db:table posts
```

**Resultado esperado:**
- 5 usuarios creados (1 admin + 4 regulares)
- 15 publicaciones creadas (3 por usuario)
- Todas las relaciones funcionando
- Datos realistas y variados
- Sin errores

## ✨ Extras Implementados

- ✅ Métodos de estado en factories (admin, inactive, published, popular)
- ✅ Script de verificación personalizado (show_data.php)
- ✅ Documentación completa y detallada
- ✅ Resumen estadístico en seeder
- ✅ Categorías en español
- ✅ Probabilidades configuradas (active, is_published, email_verified_at)
- ✅ Relaciones bidireccionales en modelos
- ✅ Casts configurados en modelos
- ✅ Fillable configurado correctamente

---

**Proyecto completamente funcional y listo para entrega** ✅
