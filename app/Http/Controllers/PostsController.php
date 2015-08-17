<?php

namespace App\Http\Controllers;

//use Request;
use Session;
use Carbon\Carbon;
use App\Http\Requests\CreatePostRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$page_title = 'This is HomePage';

    	$posts = Post::latest('published_at')->published()->get();
        $posts = Post::paginate(5);

    	//dd($posts);
    	return view('posts.index', compact('page_title', 'posts'));
    }

    public function show($id)
    {
    	$post = Post::findOrFail($id);

    	//dd($post->created_at->diffForHumans());
        //dd($post->published_at);
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
        $page_title = 'Create New Post';
        return view('posts.create', compact('page_title'));
    }

    public function store(CreatePostRequest $request)
    {
        $post = $request->all();
        //dd($post);
        Post::create($post);

        Session::flash('success', 'The post has been saved.');
        return redirect('posts');
    }

    public function edit($id)
    {
        $page_title = 'Edit Post';
        $post = Post::find($id);

        return view('posts.edit', compact('post', 'page_title'));
    }

    public function update($id, CreatePostRequest $request)
    {
        $editedPost = $request->all();
        $post = Post::find($id);

        $post->update($editedPost);

        return redirect('posts');
    }

    public function destroy($id)
    {
        $post = Post::find($id)->delete();

        return redirect('posts');
    }
}
