<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();

        return view('index', compact('posts'));
    }

    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        $posts = Post::all();

        return view('index', compact('posts'));
    }

    public function destroy($post)
    {
        Post::find($post)->delete();

        $posts = Post::all();

        return view('index', compact('posts'));
    }
}
