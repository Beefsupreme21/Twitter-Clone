<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Retweet;
use Illuminate\Http\Request;

class RetweetController extends Controller
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

        Retweet::create($validated);

        return back();
    }

    public function destroy(Retweet $retweet)
    {   
        $retweet->delete();

        return redirect('/posts');
    }
}
