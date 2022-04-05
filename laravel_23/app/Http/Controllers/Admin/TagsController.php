<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tags = Tag::orderBy('created_at', 'desc')->paginate(5);
        
        return view('admin.tags.index', ['tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tags.create');
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
        $tag = new Tag();
        $tag->name = $data['name'];
        $tag->save();
        $request->session()->flash('success','Thêm mới tag thành công');
        return redirect()->route('admin.tags.index');
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
        $tag = Tag::find($id);
        return view('admin.tags.show');
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
        $tag = Tag::find($id);

        return view('admin.tags.edit', ['category' => $category]);
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
        $tag = Tag::find($id);
        $data = request();
        $tag->name = $data['name'];
        $tag->save();
        $request->session()->flash('success','Cập nhật tag thành công');
        return redirect()->route('admin.tags.index');
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
        Tag::destroy($id);
        return redirect()->route('admin.tags.index');
    }

    public function deletesList()
    {
        $tags = Tag::onlyTrashed()->paginate(5);

        return view('admin.tags.deletesList', ['tags' => $tags]);
    }

    public function restore($id)
    {
        //
        $tag = Tag::onlyTrashed()->where('id', $id)->first();
        $tag->restore();
        return redirect()->route('admin.tags.index');
    }
}
