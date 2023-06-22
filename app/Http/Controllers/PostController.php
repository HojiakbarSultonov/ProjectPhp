<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $post = new Post;
//
//        $post->title='title';
//        $post->short_content='short content';
//        $post->content='content';
//        $post->photo='/storage/photo.jpg';
//
//        $post->save();
//        dd($post);
            $post = Post::create([
                'title'=>'Hello',
                'short_content'=>'This is Short content',
                'content'=>'This is content',
                'photo'=>'/user.jpg'
            ]);

            $post=Post::find(2)->update(['title'=>'ozgargan title']);


//            Post::destroy(1);
              Post::withTrashed()->find(1)->restore();
                 $post = Post::all();
            dd($post);
            return 'success';


//        return view('posts.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
