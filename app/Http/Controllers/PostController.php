<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $user = Auth::user();
        $user = $request->user();

        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;

        $user->posts()->save($post);

        return redirect("/post");


    }

    /**
     * Display the specified resource.
     *
     * @param string $category The URI of the category
     * @param string $post     The URI of the post
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, Post $post)
    {
        $post->load('user');

        return view(
            'posts.show', [
                'category' => $category,
                'comments' => $post->comments()
                    ->orderBy('created_at', 'DESC')
                    ->paginate(10),
                'post' => $post
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        return redirect("/post");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect("/post");
    }
}
