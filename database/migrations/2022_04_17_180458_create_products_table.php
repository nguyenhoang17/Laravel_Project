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
            $table -> integer('category_id');
            $table -> string('description') -> nullable();
            $table -> integer('quantity') -> default('1');
            $table -> string('disk');
            $table -> string('image');
            $table -> decimal('price');
            $table -> integer('status')-> default('0');
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
