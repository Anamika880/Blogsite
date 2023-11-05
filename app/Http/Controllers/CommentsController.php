<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = DB::table('comments')
        ->join('users', 'comments.user_id', '=', 'users.id')
        ->join('blogs', 'comments.blog_id', '=', 'blogs.id')
        ->select('users.*', 'comments.id as cid','comments.comments as comments','comments.status as status','blogs.*')
        ->get();
        return view('backend.comments.index',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'comments' => 'required',
        ]);
        Comment::create([
            'user_id' => $request->user_id,
            'blog_id' => $request->blog_id,
            'comments' => $request->comments,
        ]);
        return redirect()->back()->with("success", "Your Comment has been submited Sucessfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    public function approve(Request $request)
    {
        $comment = Comment::find($request->id);
        Comment::where('id', $request->id)->update([
            'status' => $request->status
        ]);
        return response()->json(['success' => 'Comment approved successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        Comment::where('id', $id)->delete();
        return redirect()->back()->with("error", "Comment Deleted Sucessfully");
    }
}
