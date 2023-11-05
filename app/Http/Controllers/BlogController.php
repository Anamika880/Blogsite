<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->hasRole('Admin')) {
            $blogs = DB::table('blogs')
            ->join('categories', 'blogs.category_id', '=', 'categories.id')
            ->select('categories.*', 'blogs.*')
            ->get();
        }else{
            $blogs = DB::table('blogs')
                ->join('categories', 'blogs.category_id', '=', 'categories.id')
                ->select('categories.*', 'blogs.*')
                ->where('author_id', Auth::user()->id)
                ->get();
        }
        return view('backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'publication_date' => 'required',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move( public_path( 'Blogs' ), $imageName );

        $post = Blog::create([
            'author_id' => Auth::user()->id,
            'slug' => Str::slug($request->title, '-'),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'image' =>  $imageName,
            'content' => $request->content,
            'author' => $request->author,
            'publication_date' => $request->publication_date,
        ]);
      
        return redirect()->route('blog.index')->with("success", "Blog Created Sucessfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Category::all();
        $blog = Blog::where('id', $id)->first();
        return view('backend.blog.show', compact('categories', 'blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $blog = Blog::findOrFail($id);
        return view('backend.blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'publication_date' => 'required',
        ]);
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move( public_path( 'Blogs' ), $imageName );
            Blog::where('id', $id)->update([
                'slug' => Str::slug($request->title, '-'),
                'category_id' => $request->category_id,
                'title' => $request->title,
                'image' => $imageName,
                'content' => $request->content,
                'author' => $request->author,
                'publication_date' => $request->publication_date,
            ]);
        } else {
            Blog::where('id', $id)->update([
                'slug' => Str::slug($request->title, '-'),
                'category_id' => $request->category_id,
                'title' => $request->title,
                'content' => $request->content,
                'author' => $request->author,
                'publication_date' => $request->publication_date,
            ]);
        }

       

        return redirect()->route('blog.index')->with("success", "Blog Updated Sucessfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $blog = Blog::where('id', $id)->first();
        $blog->delete();
        return redirect()->back()->with("error", "Blog Deleted Sucessfully");
    }
}
