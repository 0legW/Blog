<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = Comment::all();
        $posts = Post::all();
        return view('personal.main.index', compact('comments', 'posts'));
    }
}
