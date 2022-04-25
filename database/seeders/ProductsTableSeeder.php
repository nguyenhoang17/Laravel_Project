<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $products=['Giày Vans 1 ','Giày Vans 2','Giày Vans 3','Giày Vans 4','Giày Vans 5','Giày Vans 6','Giày Vans 7','Giày Vans 8'];
        DB::table('products')->truncate();
        foreach($products as $product)
        {
            DB::table('products')-> insert([
                'name'=> $product,
                'slug'=>Str::slug($product),
                'category_id'=>1,
                'description'=> 'Giày auth, đẹp, chất luọng',
                'quantity'=> 10,
                'price_origin'=> 500000,
                'price_sale'=> 450000,
                'discount_percent'=> 10,
                'user_id'=>1,
                'shop_id'=> 1,
                
                'status'=>'1'
            ]);
        }
    }
}
