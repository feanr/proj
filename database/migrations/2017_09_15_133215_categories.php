<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categories extends Migration
{
    const CATEGORIES = 'categories';
    const PRODUCT_TO_CATEGORIES = 'product_category';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::CATEGORIES, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('logo')->default('');
            $table->timestamps();
        });

        Schema::create(self::PRODUCT_TO_CATEGORIES, function (Blueprint $table) {
            $table->bigInteger('id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('product_id');
            $table->unique(['product_id', 'category_id']);
            $table->foreign('category_id')->references('id')->on(self::CATEGORIES)->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::CATEGORIES);
        Schema::dropIfExists(self::PRODUCT_TO_CATEGORIES);
    }
}
