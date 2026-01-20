<?php

namespace Database\Seeders;

use App\Models\PostOSS;
use App\Models\UserOSS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create an admin user for testing
        $admin = UserOSS::factory()->admin()->create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'active' => true,
        ]);

        // Create 3 posts for the admin user
        PostOSS::factory(3)->create([
            'user_id' => $admin->id,
        ]);

        // Create 4 regular users (total 5 users including admin)
        UserOSS::factory(4)->create()->each(function ($user) {
            // Create 3 posts for each user
            PostOSS::factory(3)->create([
                'user_id' => $user->id,
            ]);
        });

        // Output summary
        $this->command->info('Database seeded successfully!');
        $this->command->info('Total users created: ' . UserOSS::count());
        $this->command->info('Total posts created: ' . PostOSS::count());
        $this->command->info('Admin credentials: admin@example.com / password');
    }
}
