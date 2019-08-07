<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'ASC')->get();

        //dd($posts);

        return view('templates.blog.posts.index')->with('posts', $posts);
    }
    
    public function create(){
        return view('templates.blog.posts.create');
    }

    public function edit($id){

        //dd($id);

        $post = Post::find($id);

        return view('templates.blog.posts.edit')->with('post', $post);
    }
    
    public function update(Request $request, $id){
        $post = Post::find($id);
        $post->fill($request->all())->save();

        $this->edit($post->id);
    }

    public function show($id){
        $post = Post::find($id);

        return view('templates.blog.posts.show')->with('post', $post);
    }
}
