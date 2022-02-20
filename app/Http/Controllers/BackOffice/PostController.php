<?php

namespace App\Http\Controllers\BackOffice;

use App\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('backoffice.posts.index', [
            'posts' => Post::where('user_id', auth()->id())->latest()->paginate(5)
        ]);
    }

    public function create()
    {
        return view('backoffice.posts.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required'],
            'description' => ['required'],
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['publication_date'] = now();

        Post::create($attributes);

        return redirect(route('backoffice.posts.index'));
    }
}
