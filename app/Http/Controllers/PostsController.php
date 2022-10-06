<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {   
        $posts = Post::latest()->with(['retweets', 'likes', 'comments', 'user'])->get();   

        return view('posts.index', [
            'posts' => $posts, 
        ]);
    }

    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
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
