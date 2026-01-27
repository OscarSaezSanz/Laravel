<?php

namespace Database\Seeders;

use App\Models\UserOSS;
use App\Models\PostOSS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeederOSS extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Usuario 1: Oscar Saez Sanz OSS (con 3 posts)
        $user1 = UserOSS::create([
            'name' => 'Oscar Saez Sanz OSS',
            'email' => 'oscar.oss@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        PostOSS::create([
            'user_id' => $user1->id,
            'title' => 'Introducción a Laravel OSS',
            'content' => 'Este es mi primer post sobre Laravel. Aprenderemos sobre Eloquent y relaciones entre modelos.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        PostOSS::create([
            'user_id' => $user1->id,
            'title' => 'Relaciones en Eloquent - Guía OSS',
            'content' => 'Las relaciones hasMany y belongsTo son fundamentales en Laravel para gestionar bases de datos relacionales.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        PostOSS::create([
            'user_id' => $user1->id,
            'title' => 'Optimización con Eager Loading',
            'content' => 'La carga ansiosa nos ayuda a evitar el problema N+1 en las consultas a la base de datos.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        // Usuario 2: María García López (con 2 posts)
        $user2 = UserOSS::create([
            'name' => 'María García López',
            'email' => 'maria.garcia@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        PostOSS::create([
            'user_id' => $user2->id,
            'title' => 'Primeros pasos con PHP',
            'content' => 'PHP es un lenguaje de programación del lado del servidor muy potente y versátil.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        PostOSS::create([
            'user_id' => $user2->id,
            'title' => 'Blade: Motor de plantillas',
            'content' => 'Blade es el motor de plantillas incluido en Laravel, simple y potente.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        // Usuario 3: Juan Pérez Martínez (con 4 posts)
        $user3 = UserOSS::create([
            'name' => 'Juan Pérez Martínez',
            'email' => 'juan.perez@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        PostOSS::create([
            'user_id' => $user3->id,
            'title' => 'Migraciones en Laravel',
            'content' => 'Las migraciones son como control de versiones para tu base de datos.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        PostOSS::create([
            'user_id' => $user3->id,
            'title' => 'Seeders y Factories',
            'content' => 'Los seeders y factories nos permiten poblar la base de datos con datos de prueba.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        PostOSS::create([
            'user_id' => $user3->id,
            'title' => 'Validación de formularios',
            'content' => 'Laravel proporciona varias formas de validar los datos de entrada de la aplicación.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        PostOSS::create([
            'user_id' => $user3->id,
            'title' => 'Middleware en Laravel',
            'content' => 'Los middleware proporcionan un mecanismo conveniente para filtrar peticiones HTTP.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        // Usuario 4: Ana Rodríguez Fernández (con 2 posts)
        $user4 = UserOSS::create([
            'name' => 'Ana Rodríguez Fernández',
            'email' => 'ana.rodriguez@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        PostOSS::create([
            'user_id' => $user4->id,
            'title' => 'Rutas y Controladores',
            'content' => 'Las rutas definen cómo responde la aplicación a las peticiones del cliente.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        PostOSS::create([
            'user_id' => $user4->id,
            'title' => 'Autenticación en Laravel',
            'content' => 'Laravel facilita la implementación de autenticación con herramientas integradas.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        // Usuario 5: Carlos Gómez Ruiz (con 3 posts)
        $user5 = UserOSS::create([
            'name' => 'Carlos Gómez Ruiz',
            'email' => 'carlos.gomez@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        PostOSS::create([
            'user_id' => $user5->id,
            'title' => 'Eloquent ORM',
            'content' => 'Eloquent es el ORM incluido en Laravel para trabajar con bases de datos de forma elegante.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        PostOSS::create([
            'user_id' => $user5->id,
            'title' => 'Colecciones en Laravel',
            'content' => 'Las colecciones proporcionan una interfaz fluida para trabajar con arrays de datos.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        PostOSS::create([
            'user_id' => $user5->id,
            'title' => 'API REST con Laravel',
            'content' => 'Laravel hace muy sencillo crear APIs RESTful robustas y escalables.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        // Usuario 6: Laura Díaz Torres (SIN posts)
        UserOSS::create([
            'name' => 'Laura Díaz Torres',
            'email' => 'laura.diaz@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
    }
}

