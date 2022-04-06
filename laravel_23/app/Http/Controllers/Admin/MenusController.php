<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus = Menu::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.menus.index')->with([
            'menus' => $menus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adnin.menus.create');
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
        $validated = $request->validate([
            'name' => 'required|unique:menus|min:5|max:255',

        ]);
        $data = $request->all();
        $menu = new Menu();
        $menu->name = $data['name'];
        $menu->url = "/";
        // $category->slug = Str::slug($data['name']);
        //dd($category);
        $menu->save();
        // $request->session()->flash('success','Thêm mới menu thành công');
        return redirect()->route('admin.menus.index');
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
        $menus = Menu::firstwhere('id', $id);
        return view('admin.menus.edit')->with([
            'menus' => $menus
        ]);
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
        $validated = $request->validate([
            'name' => 'required|unique:menus|min:5|max:255',

        ]);
        $data = $request->only('name');
        //  DB::table('categories')->where('id', $id)
        // Category::where('id', $id)
        //     ->update([
        //         'name' => $data['name'],
        //     ]);

        $menu = Menu::find($id);
        $menu->name = $data['name'];

        $menu->save();
        // $request->session()->flash('success','Cập nhật menu thành công');
        return redirect()->route('admin.menus.index');
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
    }
}
