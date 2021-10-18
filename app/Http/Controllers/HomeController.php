<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function posts()
    {
        $posts = Post::paginate(16);

        return response()->view('posts', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function post(Post $post)
    {
        //$post = Post::findOrFail($id);
        return response()->view('post', compact('post'));
    }

}
