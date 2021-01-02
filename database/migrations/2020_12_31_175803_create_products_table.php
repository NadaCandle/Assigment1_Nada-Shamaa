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
 
            $table->id('id');
            $table->string('name');
            $table->integer('code')->unique()->nullable();
            $table->integer('quantity');
            $table->integer('price');
            $table->unsignedBigInteger('Companies_id');
            $table->unsignedBigInteger('Categories_id');


            $table->foreign('Companies_id')->references('id')->on('Companies');
            $table->foreign('Categories_id')->references('id')->on('Categories');
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
