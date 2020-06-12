<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
class SettingsController extends Controller
{
    public function index(){

    	$Setting = Setting::first();
    	return view('settings.index')->with('setting',$Setting);
    }
     public function update(Request $request){
     	$this->validate($request,[
            'blog_name'    =>'required',
            'about'        =>'required',
            'phone_number' =>'required',
            'email_blog'   =>'required|email',
            'address'      =>'required'
        ]);

    	$Setting = Setting::first();
    	$Setting->blog_name    =$request->blog_name;
    	$Setting->about        =$request->about;
    	$Setting->phone_number =$request->phone_number;
    	$Setting->email_blog   =$request->email_blog;
    	$Setting->address      =$request->address;
    	$Setting->save();
    	return redirect()->back();
    }
}
