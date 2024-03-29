<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class BlogPostController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['except'=>['show','index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blogpost::paginate(10);
        return view('post.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate(
            [
                'title'=>'required',
                'body'=>'required',
            ]
            );


            $post = new BlogPost;
            $post->user_id = Auth::id();
            $post->title = $validate['title'];
            $post->body = $validate['body'];

            $post->save();


            return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = BlogPost::find($id);
        return view('post.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = BlogPost::find($id);
        if(Auth::id()==$post->user_id){
            return view('post.edit',['post'=>$post]);
        }
        else{
            return redirect()->route('blog.index');
        }
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::id()==$id){

            $post = BlogPost::find($id);
            // Validate the request data
            $validated =  $request->validate([
                'title'=>'required',
                'body'=>'required'
            ]);
                      
            $post->update($validated);
      
            return redirect()->route('blog.show',$post->id);
        }
      
     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = BlogPost::find($id);
        $post->delete();

        return redirect()->route('blog.index');
    }
}
