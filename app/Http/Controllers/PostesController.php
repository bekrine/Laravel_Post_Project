<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostesController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }
    public function index()
    {
        $posts = post::latest()->with(['user', 'likes'])->paginate(3);
        return view('posts.index', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
        //validation
        $this->validate(
            $request,
            [
                'body' => 'required',
            ]
        );
        $request->user()->posts()->create($request->only('body'));
        return back();
    }

    public function show(post $post)
    {
        return view('users.posts.show', [
            'post' => $post
        ]);
    }

    public function destroy(post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return back();
    }
}
