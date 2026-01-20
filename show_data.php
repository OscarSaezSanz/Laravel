<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "\n===== USERS =====\n\n";
$users = App\Models\User::all();
foreach ($users as $user) {
    echo "ID: {$user->id}\n";
    echo "Name: {$user->name}\n";
    echo "Username: {$user->username}\n";
    echo "Role: {$user->role}\n";
    echo "Active: " . ($user->active ? 'Yes' : 'No') . "\n";
    echo "Email: {$user->email}\n";
    echo "Posts Count: " . $user->posts()->count() . "\n";
    echo "---\n\n";
}

echo "\n===== POSTS =====\n\n";
$posts = App\Models\Post::with('user')->get();
foreach ($posts as $post) {
    echo "ID: {$post->id}\n";
    echo "Title: {$post->title}\n";
    echo "Author: {$post->user->name}\n";
    echo "Category: {$post->category}\n";
    echo "Views: {$post->views}\n";
    echo "Published: " . ($post->is_published ? 'Yes' : 'No') . "\n";
    echo "Excerpt: " . substr($post->excerpt, 0, 100) . "...\n";
    echo "---\n\n";
}

echo "\n===== SUMMARY =====\n";
echo "Total Users: " . App\Models\User::count() . "\n";
echo "Total Posts: " . App\Models\Post::count() . "\n";
echo "Published Posts: " . App\Models\Post::where('is_published', true)->count() . "\n";
echo "Unpublished Posts: " . App\Models\Post::where('is_published', false)->count() . "\n";
echo "Admin Users: " . App\Models\User::where('role', 'admin')->count() . "\n";
echo "Regular Users: " . App\Models\User::where('role', 'user')->count() . "\n";
