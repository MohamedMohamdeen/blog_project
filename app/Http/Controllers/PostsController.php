<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;
class PostsController extends Controller
{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('posts.index', ['categories' => Category::all()])->with('posts',Post::all());
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
       return view('posts.trash', ['categories' => Category::all()])->with('posts',Post::onlyTrashed()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('Caregories',Category::all())->with('Tags',Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
            'title'       =>'required',
            'content'     =>'required',
            'category_id' =>'required',
            'featured'    =>'required|image'
        ]);
      $featured = $request->featured;
      $featured_new_name = time().$featured->getClientOriginalName();
      $featured->move('uploads/posts',$featured_new_name);
     $post =Post::create([
        "title"  => $request->title,
       "content"  => $request->content,
        "category_id" => $request->category_id,
        "featured"   => 'uploads/posts/'.$featured_new_name
        ]);
        $post->tags()->attach($request->tag);
         return redirect()->route('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         return view('posts.edit',['categories' => Category::all()])->with('Post',Post::find($id))
         ->with('tags',Tag::all());
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
     $featured = $request->featured;
      $featured_new_name = time().$featured->getClientOriginalName();
      $featured->move('uploads/posts',$featured_new_name);
     $post = Post::find($id);
        $post->title  = $request->title;
        $post->content  = $request->content;
        $post->category_id = $request->category_id;
        $post->featured   = 'uploads/posts/'.$featured_new_name;
        $post->save();
        $post->tags()->sync($request->tag);
         return redirect()->route('posts');
    }
    /**
     * Remove the specified resource by soft deletes.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sdelet($id)
    {
        $post = Post::find($id);
        $post->delete();
         return redirect()->route('posts');
    }
    /**
     * Restore the specified resource from trashed.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
         return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->forceDelete();
         return redirect()->route('posts.trash');
    }
}
