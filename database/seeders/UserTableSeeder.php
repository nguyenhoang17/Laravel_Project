<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')-> truncate();
       
        $users = [
                    [
                            'name' => 'Admin',
                            'image' => 'https://i.9mobi.vn/cf/images/2015/03/nkk/hinh-dep-19.jpg',
                            'email'=> 'Admin@gmail.com',
                            'password' => bcrypt('123456789'),
                            'address'=> 'Ha Noi',
                            'phone' => '0395515962',
                            'disk'=>'user',
                            'status' => 1
               
                    ],

                    [
                            'name' => 'Admin2',
                            'image' => 'https://i.9mobi.vn/cf/images/2015/03/nkk/hinh-dep-19.jpg',
                            'email'=> 'Admin2@gmail.com',
                            'password' => bcrypt('123456789'),
                            'address'=> 'Ha Noi',
                            'phone' => '0395515962',
                            'disk'=>'user',
                            'status' => 1
                  
                    ],
                ];

        foreach($users as $user)
        {
           
            DB:: table('users')-> insert($user); 
        }
    }
}
