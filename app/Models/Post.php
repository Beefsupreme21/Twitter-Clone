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



    public function scopeFilter($query, array $filters) {

        if($filters['search'] ?? false) {
            $query->where('content', 'like', '%' . request('search') . '%');
        }
    }
}
