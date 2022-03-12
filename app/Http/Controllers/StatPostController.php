<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;


class StatPostController extends Controller
{
    public function __invoke()
    {
        $posts = Post::query()->with('user', 'comments')->withCount('comments')->latest()->get();

        return Inertia::render('Stats/Index', [
            'posts' => $posts,
        ]);
    }
}
