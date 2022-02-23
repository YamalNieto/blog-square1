<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Post $post)
    {
        if ($post->likeByUser() == false) {
            Like::create([
                'user_id' => auth()->id(),
                'post_id' => $post->id,
            ]);
        }

    }

    public function destroy(Post $post)
    {
        $like = $post->likeByUser();

        $this->authorize('destroy', $like);

        $like->delete();
    }
}
