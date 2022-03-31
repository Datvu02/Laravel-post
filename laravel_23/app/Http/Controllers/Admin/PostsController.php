<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function __contruct()
    {
        # code...
        $this->authorizeResource(Post::class, 'post');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = \request()->get('title');
        $status = \request()->get('status');
        $posts_query = Post::orderBy('created_at', 'desc')->select('*')->paginate(5);

        if (!empty($title)) {
            $posts_query = $posts_query->where('title', "LIKE", "%$title%");
        }
        if (!empty($status)) {
            $posts_query = $posts_query->where('status', "LIKE", "%$status%");
        }
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        // dd($posts->tags);
        return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->authorize('create', Post::class);
        $data = request();
        $post = new Post();
        $post->title = $data['title'];
        // $post->slug = $data['slug'];
        $post->content = $data['content'];
        $post->user_create_id = 1;
        $post->category_id = 1;
        $post->status = 1;
        $post->save();
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        foreach($post->tags as $tag){
            echo $tag->name;
        }
        // dd($post->tags);
        return view('admin.posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('admin.posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        // $post = Post::find($id);
        // if (! Gate::allows('update-post', $post)) {
        //     abort(403);
        // }
        $this->authorize('update', $post);
        $data = request();
        // $post = new Post();
        $post->title = $data['title'];
        // $post->slug = $data['slug'];
        $post->content = $data['content'];
        $post->user_create_id = 1;
        $post->category_id = 1;
        $post->status = 1;
        $post->save();
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        if (! Gate::allows('delete-post', $post)) {
            abort(403);
        }
        $post = Post::find($id)->delete();
        return redirect()->route('admin.posts.index');
    }
    
    //frontend

    public function frontendIndex()
    {
        # code...
        return view('frontend.posts.edit');
    }

    public function detail($id)
    {
        # code...
        return view('frontend.posts.detail');
    }
}
