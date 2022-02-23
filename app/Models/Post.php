<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'likes',
        'publication_date'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'publication_date'
    ];

    public function author() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Check if the post has been liked by the authenticated user
     *
     * @return false|Like
     */
    public function likeByUser()
    {
        $like = Like::where('user_id', auth()->id())
            ->where('post_id', $this->id)
            ->first();

        if ($like === false) {
            return false;
        }

        return $like;
    }
}
