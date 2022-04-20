<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['Giày thể thao','Giày thời trang'];
        DB::table('categories')->truncate();
        foreach($categories as $category)
        {
            DB::table('categories')-> insert([
                'name'=> $category,
                'disk'=>'acbnv',
                'images'=>'hfgfd',
                'slug'=>Str::slug($category)
            ]);
        }
    }
}
