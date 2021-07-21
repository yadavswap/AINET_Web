<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

use DB;

class BlogController extends Controller
{
    public function index(){
        // $blogs = Blog::all();
        // dd($blogs);
        $blogs = Blog::orderBy('created_at','desc')->get();

        return view ('newblog', compact('blogs'));
        // return view ('newblog-single', compact('blogs'));

    }
    
    public function CourseContentPage($id)
    {

      
        $blogss = Blog::all();
        
        $cor = Blog::findOrFail($id);
        $courseinclude = Blog::where('id','=',$id)->get();
        // dd($courseinclude);



        // dd($blogs);
        // return view ('newblog-single', compact('blogs'));
        return view('newblog-single1',compact('blogss','courseinclude','cor'));


          }


}
