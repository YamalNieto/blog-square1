<?php

namespace App\Http\Controllers\BackOffice;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        return view('backoffice.posts.index', [
//            'posts' => Post::latest()->paginate(5)
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
        $attributes['likes'] = 0;
        $attributes['publication_date'] = now();

        Post::create($attributes);

        return redirect(route('backoffice.posts.index'));
    }
}
