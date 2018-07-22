<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
    	
    	// $title='Home Page';
    	// return view('pages.index',compact('title'));
        $photos = Post::orderBy('created_at','desc')->take(3)->get();
        // $post1 = Post::orderBy('created_at','desc')->get();
    	return view('pages.index')->with('photos',$photos);

    }

    public function about(){

    	return view('pages.about');

    }

    public function contact(){

    	$data=array(
    		'title'=>'Contact us',
    		'contact'=>['Mobile: 9812345678','Email: abcxyz@gmail.com','Phone: 07154321']

    	);

    	return view('pages.contact')->with($data);
    }
}
