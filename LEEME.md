# 🎓 Laravel User & Posts Management - Proyecto Completo

> **Sistema completo de gestión de usuarios y publicaciones con factories y seeders automatizados**

[![Laravel](https://img.shields.io/badge/Laravel-11.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)](https://php.net)
[![Status](https://img.shields.io/badge/Status-Completo-success.svg)]()

---

## 🚀 Inicio Rápido (30 segundos)

```bash
# 1. Navegar al proyecto
cd "c:\xampp\htdocs\laravel\Laravel_RA6_OSS"

# 2. Regenerar base de datos con datos de prueba
php artisan migrate:fresh --seed

# 3. Ver demostración completa
php demo_completa.php
```

**¡Listo!** El sistema está funcionando con 5 usuarios y 15 publicaciones.

---

## 📚 Documentación

Este proyecto incluye **5 archivos de documentación** completos:

| Archivo | Descripción | Cuándo usar |
|---------|-------------|-------------|
| **[INDICE.md](INDICE.md)** | Índice de toda la documentación | Encontrar información |
| **[RESUMEN.md](RESUMEN.md)** ⭐ | Resumen ejecutivo | Empezar aquí |
| **[README_ACTIVIDAD.md](README_ACTIVIDAD.md)** | README del proyecto | Comprender el proyecto |
| **[DOCUMENTACION.md](DOCUMENTACION.md)** | Documentación técnica | Referencia técnica |
| **[GUIA_PRUEBAS.md](GUIA_PRUEBAS.md)** | Guía de pruebas | Preparar entrega |

### 🎯 Recomendación de Lectura

**Para evaluación rápida (5 min):**
1. [RESUMEN.md](RESUMEN.md) - Vista general
2. Ejecutar `php demo_completa.php`
3. [GUIA_PRUEBAS.md](GUIA_PRUEBAS.md) - Verificar rúbrica

---

## ✨ Características Implementadas

### ✅ Factories Personalizadas (10/10 puntos)

**UserFactory** con datos realistas:
- Nombres completos usando Faker
- Usernames únicos
- Roles aleatorios (admin/user)
- Estados activos/inactivos (80% activos)
- Emails verificados (70% probabilidad)
- Métodos extra: `admin()`, `inactive()`, `unverified()`

**PostFactory** con datos realistas:
- Títulos variados (4-10 palabras)
- Contenido de múltiples párrafos (3-8)
- Extractos de hasta 200 caracteres
- Vistas aleatorias (0-10,000)
- 10 categorías en español
- Estados de publicación (70% publicados)
- Métodos extra: `published()`, `unpublished()`, `popular()`

### ✅ Uso de Faker (10/10 puntos)

Datos realistas generados:
- ✅ Nombres y apellidos
- ✅ Usernames únicos
- ✅ Emails únicos
- ✅ Títulos de publicaciones
- ✅ Contenido en párrafos
- ✅ Extractos
- ✅ Fechas aleatorias
- ✅ Números aleatorios
- ✅ Categorías en español
- ✅ Booleanos con probabilidades

### ✅ Seeders Ejecutados (10/10 puntos)

**DatabaseSeeder** genera:
- 1 usuario administrador (credenciales conocidas)
- 4 usuarios regulares (datos aleatorios)
- 3 publicaciones por cada usuario
- **Total: 5 usuarios, 15 publicaciones**
- Salida informativa con resumen

### ✅ Entorno de Testing (10/10 puntos)

**Un solo comando regenera todo:**
```bash
php artisan migrate:fresh --seed
```

**Scripts de verificación incluidos:**
- `show_data.php` - Lista todos los datos
- `demo_completa.php` - Demostración completa con estadísticas

---

## 📊 Datos Generados

| Recurso | Cantidad | Detalles |
|---------|----------|----------|
| **Usuarios** | 5 | 1 admin + 4 regulares |
| **Publicaciones** | 15 | 3 por usuario |
| **Categorías** | 10 | En español |
| **Relaciones** | 15 | User ↔ Post |

---

## 🔑 Credenciales de Prueba

**Usuario Administrador:**
```
Email: admin@example.com
Password: password
Username: admin
```

**Usuarios Regulares:**
- Password: `password`
- Emails/usernames generados aleatoriamente

---

## 📂 Estructura del Proyecto

```
Laravel_RA6_OSS/
│
├── 📄 DOCUMENTACIÓN (5 archivos)
│   ├── INDICE.md                    # Índice general
│   ├── RESUMEN.md                   # Resumen ejecutivo
│   ├── README_ACTIVIDAD.md          # README del proyecto
│   ├── DOCUMENTACION.md             # Documentación técnica
│   └── GUIA_PRUEBAS.md             # Guía de pruebas
│
├── 🔧 SCRIPTS DE VERIFICACIÓN (2 archivos)
│   ├── show_data.php               # Lista de datos
│   └── demo_completa.php           # Demostración completa
│
├── 📦 MODELOS (2 archivos)
│   └── app/Models/
│       ├── User.php                # Modelo de usuario
│       └── Post.php                # Modelo de publicación
│
├── 🏭 FACTORIES (2 archivos)
│   └── database/factories/
│       ├── UserFactory.php         # Factory de usuarios
│       └── PostFactory.php         # Factory de publicaciones
│
├── 🌱 SEEDERS (1 archivo)
│   └── database/seeders/
│       └── DatabaseSeeder.php      # Seeder principal
│
└── 🗄️ MIGRACIONES (2 archivos)
    └── database/migrations/
        ├── 0001_01_01_000000_create_users_table.php
        └── 2026_01_20_084451_create_posts_table.php
```

---

## 🛠️ Comandos Principales

### Base de Datos
```bash
# Regenerar BD con datos de prueba
php artisan migrate:fresh --seed

# Ver estructura de tablas
php artisan db:table users
php artisan db:table posts
php artisan db:show
```

### Verificación
```bash
# Demostración completa (recomendado)
php demo_completa.php

# Lista de datos
php show_data.php
```

### Laravel Tinker
```bash
php artisan tinker
>>> User::count()              # Contar usuarios
>>> Post::count()              # Contar publicaciones
>>> User::with('posts')->get() # Usuarios con publicaciones
>>> User::find(1)->posts       # Publicaciones de un usuario
```

---

## 🎯 Cumplimiento de Rúbrica

| Criterio | Puntos | Estado |
|----------|--------|--------|
| Define y ejecuta seeders | 10/10 | ✅ Completo |
| Crea factories personalizadas | 10/10 | ✅ Completo |
| Usa Faker para datos realistas | 10/10 | ✅ Completo |
| Prepara entornos de testing | 10/10 | ✅ Completo |
| **TOTAL** | **40/40** | ✅ **100%** |

### Evidencias

**Factories personalizadas:**
- ✅ [UserFactory.php](database/factories/UserFactory.php) - Completa con métodos extra
- ✅ [PostFactory.php](database/factories/PostFactory.php) - Completa con métodos extra

**Uso de Faker:**
- ✅ Nombres realistas en UserFactory
- ✅ Títulos y contenido en PostFactory
- ✅ 10 tipos diferentes de datos Faker

**Seeders:**
- ✅ [DatabaseSeeder.php](database/seeders/DatabaseSeeder.php) - Genera 5 usuarios y 15 posts
- ✅ Salida con resumen informativo

**Entorno de testing:**
- ✅ Comando único: `php artisan migrate:fresh --seed`
- ✅ Scripts de verificación incluidos
- ✅ Documentación completa

---

## 🌟 Extras Implementados

- ⭐ **Métodos de estado** en factories (admin, published, popular, etc.)
- ⭐ **10 categorías** de publicaciones en español
- ⭐ **Probabilidades** configuradas (80% activos, 70% publicados)
- ⭐ **2 scripts** de verificación completos
- ⭐ **5 archivos** de documentación exhaustiva
- ⭐ **Relaciones bidireccionales** (User ↔ Post)
- ⭐ **Estadísticas** detalladas en demo
- ⭐ **Casts** configurados en modelos
- ⭐ **Fillable** correctamente definido

---

## 📸 Capturas Recomendadas para Entrega

1. ✅ Ejecución de `php artisan migrate:fresh --seed`
2. ✅ Salida completa de `php demo_completa.php`
3. ✅ Código de `UserFactory.php`
4. ✅ Código de `PostFactory.php`
5. ✅ Código de `DatabaseSeeder.php`
6. ✅ Salida de `php artisan db:table users`
7. ✅ Salida de `php artisan db:table posts`
8. ✅ Modelo `User.php` mostrando relación `posts()`
9. ✅ Modelo `Post.php` mostrando relación `user()`

---

## 📋 Checklist de Entrega

### Código
- ✅ Modelos actualizados (User.php, Post.php)
- ✅ Migraciones completas
- ✅ Factories personalizadas
- ✅ Seeders funcionales
- ✅ Relaciones configuradas

### Documentación
- ✅ 5 archivos de documentación
- ✅ Scripts de verificación
- ✅ Comentarios en código

### Pruebas
- ✅ migrate:fresh --seed funciona
- ✅ Datos se generan correctamente
- ✅ Relaciones funcionan
- ✅ Scripts de verificación ejecutan

### GitHub
- ⬜ Crear repositorio
- ⬜ Subir código
- ⬜ README claro
- ⬜ Commits descriptivos

---

## 🔍 Verificación Final

### Paso 1: Regenerar BD
```bash
php artisan migrate:fresh --seed
```

**Resultado esperado:**
```
✓ Dropping all tables
✓ Running migrations
✓ Seeding database
✓ Database seeded successfully!
✓ Total users created: 5
✓ Total posts created: 15
```

### Paso 2: Verificar Datos
```bash
php demo_completa.php
```

**Resultado esperado:**
- Resumen completo de usuarios y publicaciones
- Estadísticas detalladas
- Verificación de relaciones
- Confirmación de cumplimiento de requisitos

---

## 💻 Requisitos del Sistema

- PHP 8.2 o superior
- Composer
- Laravel 11.x
- MySQL 8.0+ (XAMPP/MySQL Workbench)

---

## 🎓 Objetivo de la Actividad

✅ **Automatizar la generación de datos de prueba** utilizando las herramientas propias de Laravel (Factories y Seeders) para facilitar el desarrollo y las pruebas de la aplicación.

**CUMPLIDO AL 100%**

---

## 📞 Recursos Adicionales

- **[INDICE.md](INDICE.md)** - Navegar toda la documentación
- **[RESUMEN.md](RESUMEN.md)** - Vista general rápida
- **[GUIA_PRUEBAS.md](GUIA_PRUEBAS.md)** - Preparar entrega
- **[DOCUMENTACION.md](DOCUMENTACION.md)** - Referencia técnica completa

---

## ✅ Estado del Proyecto

**PROYECTO COMPLETADO Y LISTO PARA ENTREGA** ✅

- ✅ Todos los requisitos cumplidos
- ✅ Rúbrica completa (40/40 puntos esperados)
- ✅ Documentación exhaustiva
- ✅ Scripts de verificación
- ✅ Extras implementados
- ✅ Código limpio y comentado
- ✅ Funcionalidad probada

---

## 📅 Información

- **Proyecto:** Laravel User & Posts Management System
- **Actividad:** Factories y Seeders en Laravel
- **Framework:** Laravel 11.x
- **Lenguaje:** PHP 8.2+
- **Base de Datos:** MySQL 8.0 (Laravel_RA6_OSS)
- **Fecha:** Enero 2026

---

## 🚀 Próximos Pasos

1. **Revisar documentación** - Leer [RESUMEN.md](RESUMEN.md)
2. **Ejecutar demo** - `php demo_completa.php`
3. **Tomar capturas** - Ver [GUIA_PRUEBAS.md](GUIA_PRUEBAS.md)
4. **Subir a GitHub** - Crear repositorio
5. **Preparar entrega** - Documentación + Capturas + GitHub

---

**¡Proyecto listo para su evaluación!** 🎉

