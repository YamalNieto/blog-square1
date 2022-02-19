<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('frontoffice.home', [
            'posts' => Post::latest()->paginate(5)
        ]);
    }
}
