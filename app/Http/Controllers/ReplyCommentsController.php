<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\replyComments;
use App\Http\Requests\StorereplyCommentsRequest;
use App\Http\Requests\UpdatereplyCommentsRequest;

class ReplyCommentsController extends Controller
{
    public function store(Comment $comment)
    {
        return $comment->addReplyComment(request('body'));

        return redirect('/posts');
    }
}
