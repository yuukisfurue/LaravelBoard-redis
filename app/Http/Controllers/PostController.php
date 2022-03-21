<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        $jyobs = config('consts.jyobs');
        return view('index')
            ->with(['posts' => $posts]);
    }

    // Implicit Binding
    public function show(Post $post)
    {
        return view('posts.show')
            ->with(['post' => $post]);
            
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->name = $request->name;
        $post->gender = $request->gender;
        $post->pref = $request->pref;
        $post->jyob = $request->jyob;
        $post->employmentstatus = $request->employmentstatus;
        $post->save();
        
        return redirect()
            ->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit')
            ->with(['post' => $post]);
    }
    public function boot()
    {
        Paginator::useBootstrap();
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $post = new Post();
        $post->name = $request->name;
        $post->gender = $request->gender;
        $post->pref = $request->pref;
        $post->jyob = $request->jyob;
        $post->employmentstatus = $request->employmentstatus;
        $post->save();

        return redirect()
            ->route('posts.show', $post);
    }
}