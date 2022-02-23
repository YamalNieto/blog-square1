<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        if (request('sort') == 'likes') {
            $posts = Post::orderBy('likes', 'desc')->paginate(5)->withQueryString();
        } else {
            $posts = Post::orderBy('publication_date', 'desc')->paginate(5);
        }

        return view('frontoffice.home', [
            'posts' => $posts
        ]);
    }
}
