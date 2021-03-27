<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('name');
            $table->string('feature_image_path')->nullable();
            $table->string('daodien');
            $table->string('dienvien');
            $table->string('theloai');
            $table->string('khoichieu');
            $table->string('thoiluong');
            $table->string('ngonngu');
            $table->string('rated');
            $table->string('chitiet');
            $table->string('url');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->timestamps();
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
}
