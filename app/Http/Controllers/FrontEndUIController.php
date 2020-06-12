<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
class FrontEndUIController extends Controller
{
   public function index(){
   	$setting= Setting::first()->blog_name;
   	$setting2= Setting::first();
   	$category= Category::all();
   	$post= Post::orderBy('created_at','desc')->take(3)->get();
   	$posts_without_3= Post::orderBy('created_at','desc')->skip(3)->take(2)->get();
   	return view('index')->with('blog_name',$setting)->with('categorirs',$category)
   	                    ->with('posts',$post)
                       	->with('posts_without_3',$posts_without_3)
                       	->with('cook_posts',Category::find(4))
                       	->with('medical_posts',Category::find(5))
                       	->with('latest_posts',Post::orderBy('created_at','desc')->get())
                       	->with('wike_posts',Category::find(6))
                       	->with('wike_posts2',Post::where('category_id',6)->skip(1)->take(3)->get())
                       	->with('islamic_posts',Category::find(3))
                       	->with('islamic_posts2',Post::where('category_id',3)->skip(1)->take(3)->get())
                       	->with('setting',$setting2);
   }
   public function single_post($id){
   	$setting= Setting::first()->blog_name;
   	$setting2= Setting::first();
   	$category= Category::all();
   	$post_content= Post::find($id);
   	return view('front_web.single')->with('blog_name',$setting)->with('categorirs',$category)
                       	->with('latest_posts',Post::orderBy('created_at','desc')->get())
                       	->with('setting',$setting2)
                       	->with('post_content',$post_content);
   }
}
