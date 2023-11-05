<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function blog()
    {
        $blogs = Blog::take(4)->get();
        return view('frontend.blog',compact('blogs'));
    }
    public function blogdetails($id)
    {
        $blogs = Blog::whereDate('created_at', Carbon::today())->get();
        $blog = Blog::where('id',$id)->first();
        return view('frontend.singleblog',compact('blog','blogs'));
    }
}
