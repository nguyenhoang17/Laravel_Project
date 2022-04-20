<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')-> truncate();
       
        $brands = [
                    [
                            'name' => 'Vans',
               
                    ],

                    [
                        'name' => 'Nike',
                  
                    ],
                ];

        foreach($brands as $brand)
        {
           
            DB:: table('brands')-> insert($brand); 
        }
    }
}
