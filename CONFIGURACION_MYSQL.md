# ⚙️ Configuración de Base de Datos MySQL

## Configuración Actual

```
Base de datos: Laravel_RA6_OSS
Usuario: root
Contraseña: curso
Host: 127.0.0.1
Puerto: 3306
```

## Archivo .env

El archivo `.env` ya está configurado con estas credenciales:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Laravel_RA6_OSS
DB_USERNAME=root
DB_PASSWORD=curso
```

## Pasos para Configurar en Otro Entorno

### 1. Crear la Base de Datos en MySQL

Opción 1 - MySQL Workbench:
1. Abrir MySQL Workbench
2. Conectarse al servidor
3. Ejecutar: `CREATE DATABASE Laravel_RA6_OSS;`

Opción 2 - Línea de comandos:
```bash
mysql -u root -p
CREATE DATABASE Laravel_RA6_OSS;
exit
```

### 2. Configurar el archivo .env

Editar el archivo `.env` con tus credenciales:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Laravel_RA6_OSS
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### 3. Ejecutar Migraciones y Seeders

```bash
php artisan migrate:fresh --seed
```

## Verificar Conexión

```bash
php artisan db:show
```

## Comandos Útiles MySQL

### Desde línea de comandos MySQL:

```sql
-- Ver todas las bases de datos
SHOW DATABASES;

-- Usar la base de datos
USE Laravel_RA6_OSS;

-- Ver todas las tablas
SHOW TABLES;

-- Ver estructura de tabla users
DESCRIBE users;

-- Ver estructura de tabla posts
DESCRIBE posts;

-- Contar usuarios
SELECT COUNT(*) FROM users;

-- Contar publicaciones
SELECT COUNT(*) FROM posts;

-- Ver usuarios con sus publicaciones
SELECT u.name, u.username, COUNT(p.id) as total_posts 
FROM users u 
LEFT JOIN posts p ON u.id = p.user_id 
GROUP BY u.id;
```

## Reiniciar Base de Datos

Para eliminar todas las tablas y volver a crearlas:

```bash
php artisan migrate:fresh --seed
```

## Backup de la Base de Datos

### Exportar:
```bash
mysqldump -u root -pcurso Laravel_RA6_OSS > backup_Laravel_RA6_OSS.sql
```

### Importar:
```bash
mysql -u root -pcurso Laravel_RA6_OSS < backup_Laravel_RA6_OSS.sql
```

## Solución de Problemas

### Error: Access denied
- Verificar usuario y contraseña en `.env`
- Verificar que el servidor MySQL esté ejecutándose

### Error: Unknown database
- Crear la base de datos primero: `CREATE DATABASE Laravel_RA6_OSS;`

### Error: Connection refused
- Verificar que MySQL esté corriendo
- En XAMPP: Iniciar el módulo MySQL
- Verificar el puerto (por defecto 3306)

## Ventajas de MySQL sobre SQLite

✅ Mejor rendimiento con grandes volúmenes de datos  
✅ Soporte para múltiples conexiones simultáneas  
✅ Más opciones de tipos de datos  
✅ Mejor para entornos de producción  
✅ Herramientas de administración como MySQL Workbench  

## Verificar Datos Generados

Después de ejecutar los seeders, verificar con:

```bash
# Script de demostración completa
php demo_completa.php

# Script simple de datos
php show_data.php

# Laravel Tinker
php artisan tinker
>>> User::count()
>>> Post::count()
```

---

**Configuración actualizada:** Enero 2026
