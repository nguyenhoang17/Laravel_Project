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
        Schema::table('users', function (Blueprint $table) {
            $table -> string('address')-> after('password');
            $table -> string('phone') -> after('address');
            $table -> string('disk') -> after('phone')-> nullable();
            $table -> string('image') -> after('disk') -> nullable();
            $table -> integer('status') -> after('image')->default(0);
            $table->string('role')->after('status')->default('user');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table -> dropColumn(['address','phone', 'disk', 'image', 'status']);
        });
    }
};
