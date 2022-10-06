<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'replies',
        'retweets',
        'likes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        Comment::create([
            'body' => $body,
            'post_id' => $this->id,
            'user_id' => auth()->user()->id
        ]);
    }

    public function retweets()
    {
        return $this->hasMany(Retweet::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

}
