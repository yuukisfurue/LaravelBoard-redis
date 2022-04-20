<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Request $request) {
        $posts = Post::search()->paginate(10);
        $search_params = $request->only([
            'name',
            'gender',
            'prefecture',
            'company',
            'jyob',
            'employmentstatus'
        ]);

        return view('index', [
            'posts' => $posts,
            'search_params' => $search_params
        ]);
    }

    public function csvDownload() {
        $posts = Post::search()->get();

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=file.csv"
        ];

        $callback = function() use($posts) {
            $handle = fopen('php://output', 'w');

          $columns = [
            'id',
            'name',
            'gender',
            'prefecture',
            'company',
            'jyob',
            'employmentstatus'
            ];

            mb_convert_variables('SJIS-win', 'UTF-8', $columns);

            fputcsv($handle, $columns);

            foreach($posts as $post) {
                $csv = [
                    $post->id,
                    $post->name,
                    $post->gender,
                    $post->prefecture,
                    $post->company,
                    $post->jyob,
                    $post->employmentstatus
                ];

                mb_convert_variables('SJIS-win', 'UTF-8', $csv);

                fputcsv($handle, $csv);
            }

            fclose($handle);
        };

        return response()->stream($callback, 200, $headers);

    }

    public function boot()
    {
        Paginator::useBootstrap();
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
        $post->prefecture = $request->prefecture;
        $post->company = $request->company;
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

    public function update(PostRequest $request, Post $post)
    {
        $post->name = $request->name;
        $post->gender = $request->gender;
        $post->prefecture = $request->prefecture;
        $post->company = $request->company;
        $post->jyob = $request->jyob;
        $post->employmentstatus = $request->employmentstatus;
        $post->save();

        return redirect()
            ->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()
            ->route('posts.index');
    }

}