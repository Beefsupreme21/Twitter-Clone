<?php

namespace App\Models;

use App\Models\replyComments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'user_id',
        'post_id',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replyComments()
    {
        return $this->hasMany(replyComments::class);
    }

    public function addReplyComment($body)
    {
        replyComments::create([
            'body' => $body,
            'comment_id' => $this->id,
            'user_id' => auth()->user()->id
        ]);
    }
}
