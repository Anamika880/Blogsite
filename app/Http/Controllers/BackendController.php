<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Contracts\Role;

class BackendController extends Controller
{
    public function dashboard()
    {
        return view('backend.index');
    }
    public function myprofile()
    {
        $myblogs = DB::table('blogs')
        ->join('categories', 'blogs.category_id', '=', 'categories.id')
        ->select('categories.*', 'blogs.*')
        ->where('author_id', Auth::user()->id)
        ->get();
        return view('backend.myprofile',compact('myblogs'));
    }
}
