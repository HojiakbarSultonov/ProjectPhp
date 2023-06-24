<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{

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
//            $post = Post::create([
//                'title'=>'Hello',
//                'short_content'=>'This is Short content',
//                'content'=>'This is content',
//                'photo'=>'/user.jpg'
//            ]);

//            $post=Post::find(2)->update(['title'=>'ozgargan title']);
//
//
////            Post::destroy(1);
//              Post::withTrashed()->find(1)->restore();
//                 $post = Post::all();
//               dd($post);
//                  $posts = DB::table('posts')->get()->pluck('title');
//                   dd($posts);
//                  return 'success';

        $posts = Post::all();
       return view('posts.index')->with('posts', $posts);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }


    public function store(StorePostRequest $request)
    {


        $post = Post::create([
            'title'=>$request->title,
            'short_content'=>$request->short_content,
            'content'=>$request->content,
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('posts.show')->with([
            'post'=> $post,
            'recent_posts'=>Post::latest()->get()->except($post->id)->take(5)
        ]);
    }


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
