<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


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

        $posts = Post::latest()->paginate(3);
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

        if($request->hasFile('photo')){
                $name = $request->file('photo')->getClientOriginalName();
             $path = $request->file('photo')->storeAs('post-photos', $name);
            }

        $post = Post::create([
            'title'=>$request->title,
            'short_content'=>$request->short_content,
            'content'=>$request->content,
            'photo'=>$path ?? null,
        ]);
        return redirect()->route('posts.index');
    }


    public function show(Post $post)
    {

        return view('posts.show')->with([
            'post'=> $post,
            'recent_posts'=>Post::latest()->get()->except($post->id)->take(5)
        ]);
    }


    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post'=>$post]);
    }


    public function update(StorePostRequest $request, Post $post)
    {

        if($request->hasFile('photo')){
            if(isset($post->photo)){
                Storage::delete($post->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post-photos', $name);

        }
        $post->update([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'photo' => $path ?? $post->photo,
        ]);
        return redirect()->route('posts.show', ['post'=>$post->id]);

    }



    public function destroy(Post $post)
    {

            if(isset($post->photo)){
                Storage::delete($post->photo);
            }
        $post->delete();

        return redirect()->route('posts.index');

    }
}
