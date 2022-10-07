<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class replyComments extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'user_id',
        'comment_id',
    ];

    public function Comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
