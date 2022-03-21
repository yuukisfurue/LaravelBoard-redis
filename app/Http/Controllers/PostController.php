<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'gender' => 'required',
            'pref' => 'required',
            'jyob' => 'required',
            'employmentstatus' => 'required',
        ], [
            'name.required' => '氏名は必須です',
            'name.min' => ':min 文字以上入力してください',
        ]);

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

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name' => 'required|min:3',
            'gender' => 'required',
            'pref' => 'required',
            'jyob' => 'required',
            'employmentstatus' => 'required',
        ], [
            'name.required' => '氏名は必須です',
            'name.min' => ':min 文字以上入力してください',
        ]);

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