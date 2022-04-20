<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')-> truncate();
       
        $users = [
                    [
                            'name' => 'Vans',
                            'address'=> 'Ha Noi',
                            'phone' => '0395515962',
               
                    ],

                    [
                        'name' => 'Nike',
                        'address'=> 'Ha Noi',
                        'phone' => '0395515962',
                  
                    ],
                ];

        foreach($users as $user)
        {
           
            DB:: table('shops')-> insert($user); 
        }
    }
}
