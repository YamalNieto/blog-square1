<?php

namespace App\Http\Controllers\BackOffice;

use App\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('backoffice.posts.index', ['posts' => Post::paginate(5)]);
    }
}
