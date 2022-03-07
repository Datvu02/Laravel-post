<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name' => 'admin',
                'avatar' => 'admin',
                'address' => 'hanoi',
                'email' => 'admin@gmail.com',
                'phone' => '0123456789',
                'status' => '0',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'admod',
                'avatar' => 'admod',
                'address' => 'hanoi',
                'email' => 'admod@gmail.com',
                'phone' => '0123456789',
                'status' => '0',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'admin2',
                'avatar' => 'admin2',
                'address' => 'hanoi',
                'email' => 'admin2@gmail.com',
                'phone' => '0123456789',
                'status' => '0',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'admin3',
                'avatar' => 'admin3',
                'address' => 'hanoi',
                'email' => 'admin3@gmail.com',
                'phone' => '0123456789',
                'status' => '0',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'admin4',
                'avatar' => 'admin4',
                'address' => 'hanoi',
                'email' => 'admin4@gmail.com',
                'phone' => '0123456789',
                'status' => '0',
                'password' => bcrypt('12345678')
            ]
        ];
        foreach($users as $user)
        {
            DB::table('users')->insert($user);
        }
    }
}
