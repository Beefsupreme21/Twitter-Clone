<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Retweet;

class PostsController extends Controller
{
    public function index()
    {   
        $posts = Post::latest()->withCount('retweets')->with('user')->get();   
        $retweets = Retweet::latest()->with('user')->get(); 

        // dd($retweets[1]->user_id);

    

        return view('posts.index', [
            'posts' => $posts, 
            'retweets' => $retweets, 
        ]);
    }

    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }



    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'content' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Post::create($formFields);

        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update([
            'title' => request('title'),
            'content' => request('content'),

        ]);

        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts');
    }

}
