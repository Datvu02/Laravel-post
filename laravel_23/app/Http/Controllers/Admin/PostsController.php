<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
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
        $posts_query = DB::table('posts')->select('*');

        if (!empty($title)) {
            $posts_query = $posts_query->where('title', "LIKE", "%$title%");
        }
        if (!empty($status)) {
            $posts_query = $posts_query->where('status', "LIKE", "%$status%");
        }
        $posts = $posts_query->get();
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
        $data = request();
        DB::table('posts')->insert([
            'title' =>  $data['title'],
           'slug' =>  $data['slug'],
           'content' =>  $data['content'],
           'user_create_id' => 1,
           'category_id' =>  1,
           'status' => 1,
           'created_at' => now(),
           'updated_at' => now()

        ]);
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
        $post = DB::table('posts')->find($id);
        // dd($post);
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
        $post = DB::table('posts')->find($id);
        return view('admin.posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = request();
        DB::table('posts')->where('id', $id)->update([
            'title' =>  $data['title'],
        //    'slug' =>  $data['slug'],
           'content' =>  $data['content'],
        //    'user_create_id' => 1,
        //    'category_id' =>  1,
           'status' => $data['status'],
           'updated_at' => now()
        ]);
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
        DB::table('posts')->where('id', $id)->dekete();
        return redirect()->route('admin.posts.index');
    }
}
