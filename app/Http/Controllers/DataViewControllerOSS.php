<?php

namespace App\Http\Controllers;

use App\Models\UserOSS;
use App\Models\PostOSS;
use Illuminate\Http\Request;

class DataViewControllerOSS extends Controller
{
    public function index()
    {
        $users = UserOSS::withCount('posts')->get();
        $posts = PostOSS::with('user')->get();
        
        $stats = [
            'total_users' => UserOSS::count(),
            'total_posts' => PostOSS::count(),
            'admin_users' => UserOSS::where('role', 'admin')->count(),
            'active_users' => UserOSS::where('active', true)->count(),
            'published_posts' => PostOSS::where('is_published', true)->count(),
        ];
        
        return view('data.index', compact('users', 'posts', 'stats'));
    }
}
