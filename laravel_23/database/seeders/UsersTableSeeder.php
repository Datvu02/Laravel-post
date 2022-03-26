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
        // DB::table('users')->truncate();
        $users = [
            [
                'user' => [
                    'name' => 'admin',
                    'avatar' => 'admin',
                    'email' => 'admin@gmail.com',
                    'status' => '1',
                    'address' => 'hanoi',
                    'phone' => '0123456789',
                    'password' => bcrypt('12345678'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                'info' => [
                    'address' => 'hanoi',
                    'phone' => '0123456789',
                ]
            ],
            [
                'user' => [
                    'name' => 'admod',
                    'avatar' => 'admod',
                    'email' => 'admod@gmail.com',
                    'status' => '1',
                    'address' => 'hanoi',
                    'phone' => '0123456789',
                    'password' => bcrypt('12345678'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                'info' => [
                    'address' => 'hanoi',
                    'phone' => '0123456789',
                ]
                
            ],
            [
                'user' => [
                    'name' => 'admin2',
                    'avatar' => 'admin2',
                    'email' => 'admin2@gmail.com',
                    'status' => '1',
                    'address' => 'hanoi',
                    'phone' => '0123456789',
                    'password' => bcrypt('12345678'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                'info' => [
                    'address' => 'hanoi',
                    'phone' => '0123456789',
                ]
            ],
            [
                'user' => [
                    'name' => 'admin3',
                    'avatar' => 'admin3',
                    'email' => 'admin3@gmail.com',
                    'status' => '1',
                    'address' => 'hanoi',
                    'phone' => '0123456789',
                    'password' => bcrypt('12345678'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                'info' => [
                    'address' => 'hanoi',
                    'phone' => '0123456789',
                ]
            ],
            [
                'user' => [
                    'name' => 'admin4',
                    'avatar' => 'admin4',
                    'email' => 'admin4@gmail.com',
                    'status' => '1',
                    'address' => 'hanoi',
                    'phone' => '0123456789',
                    'password' => bcrypt('12345678'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                'info' => [
                    'address' => 'hanoi',
                    'phone' => '0123456789',
                ]
            ]
        ];
        foreach($users as $user)
        {
            $user_id = DB::table('users')->insertGetId($user['user']);

            $user['info']['user_id'] = $user_id;
            DB::table('user_infos')->insert($user['info']);
        }
    }
}
