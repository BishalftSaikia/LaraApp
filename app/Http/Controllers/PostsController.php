<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    
    public function index()
    {
        //$posts= Post::orderBy('created_at','desc')->get();
        //$posts=Post::all();

        $posts= Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts',$posts);
    }

    
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>"required",
            'body'=> 'required'
        ]);

        $post = new Post;
        $post->title= $request->input('title');
        $post->body=$request->input('body');
        $post->user_id=auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success',"Post Created");
    }

    
    public function show($id)
    {
        $post=Post::find($id);
        //$posts=Post::where('title','Post Two')->get();
        return view('posts.show')->with('post',$post);
    }

    
    public function edit($id)
    {
        $post=Post::find($id);

        if($post->user_id == auth()->user()->id){
            return view('posts.edit')->with('post',$post);
        }else{
            return redirect('/posts')->with('error','Unauthorised');
        }
        
    }

    
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title= $request->input('title');
        $post->body=$request->input('body');
        $post->save();

        return redirect('/posts')->with('success','Post Updated');
    }

    
    public function destroy($id)
    {
        $post=Post::find($id);

        if(auth()->user()->id == $post->user_id){
        $post->delete();
        }

        return redirect('/posts')->with('error','Post Deleted');
    }
}
