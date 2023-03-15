<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $blogPost)
    {

        //check if user is logged
        if(Auth::check()){
            $blogPost = BlogPost::find($blogPost);
            $validate = $request->validate(
                ['comment'=>'required',]
            );
    
            $comment = new Comment;
            $comment->comment = $validate['comment'];
            $comment->user_id = Auth::id();
            $comment->parent_id = $blogPost->user_id;
            $comment->post_id = $blogPost->id;
    
            $comment->save();
    
            return redirect()->route('blog.show',$blogPost->id);
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogId,$commentId)
    {
    //     $comment = Comment::where('id', $commentId)
    //                   ->where('blog_id', $blogId)
    //                   ->firstOrFail();
    
    // $comment->delete();
    
    // return redirect()->route('blog.index');
}

}
