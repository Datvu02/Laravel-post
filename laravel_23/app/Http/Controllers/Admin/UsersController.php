<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $email = \request()->get('email');
        $name = \request()->get('name');
        $users_query = DB::table('users')->select('*');

        if (!empty($email)) {
            $users_query = $users_query->where('email', "LIKE", "%$email%");
        }
        if (!empty($name)) {
            $users_query = $users_query->where('name', "LIKE", "%$name%");
        }
        $users = $users_query->get();
        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.users.create');
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
        DB::table('users')->insert([
            'name' => $data['name'],
            'avatar' => $data['avatar'],
            'email' => $data['email'],
            'status' => $data['status'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'password' => $data['password'],
            // 'updated_at' => now()
        ]);
        return redirect()->route('admin.users.index');
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
        $user = DB::table('users')->find($id);
        return view('admin.users.show', ['user' => $user]);
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
        $user = DB::table('users')->find($id);
        return view('admin.users.edit', ['user' => $user]);
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
        DB::table('users')->updateOrInsert([
            'name' => $data['name'],
            'avatar' => $data['avatar'],
            'email' => $data['email'],
            'status' => $data['status'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'password' => $data['password'],
            'updated_at' => now()
        ]);
        return redirect()->route('admin.users.index');
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
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('admin.users.index');
    }
}
