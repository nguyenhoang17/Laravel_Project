<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table -> string('name');
            $table -> string('slug');
            $table -> integer('category_id');
            $table -> text('description') -> nullable();
            $table -> integer('quantity') -> default(1);
            $table -> decimal('price_origin',13,2)-> default(0);
            $table -> decimal('price_sale',13,2)-> default(0);
            $table -> integer('review_count')-> default(0);
            $table -> integer('sell_count')-> default(0);
            $table -> integer('like_count')-> default(0);
            $table -> integer('user_id');
            $table -> integer('brand_id')->nullable();
            $table -> json('attribute')-> nullable();
            $table -> integer('status')-> default(0);
            $table->timestamps();
            $table -> softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
