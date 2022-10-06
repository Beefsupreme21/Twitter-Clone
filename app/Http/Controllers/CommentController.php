<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        // request()->merge([
        //     'user_id' => auth()->user()->id,
        //     'post_id' => $post->id,
        // ]);

        $this->validate(request(), ['body' => 'required']);

        $post->addComment(request('body'));

        return back();
    }
}
