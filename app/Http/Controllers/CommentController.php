<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), ['body' => 'required']);

        $post->addComment(request('body'));

        return back();
    }

    public function show(Comment $comment) {
        return view('comments.show', [
            'comment' => $comment
        ])->with('replyComments');
    }
}
