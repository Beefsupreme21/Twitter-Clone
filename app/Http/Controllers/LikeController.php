<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Http\Requests\StoreLikeRequest;
use App\Http\Requests\UpdateLikeRequest;

class LikeController extends Controller
{
    public function store() 
    {
        request()->merge([
            'user_id' => auth()->user()->id,
        ]);

        $validated = request()->validate([
            'post_id' => 'required',
            'user_id' => 'required'
        ]);

        Like::create($validated);

        return back();
    }

    public function destroy(Like $like)
    {   
        $like->delete();

        return redirect('/posts');
    }
}
