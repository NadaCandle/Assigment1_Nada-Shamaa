<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order__products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Order_id');
            $table->unsignedBigInteger('Product_Code');
;
            $table->integer('QTY');
            $table->integer('PriceEach');

            

            
            $table->timestamps();

            $table->foreign('Order_id')->references('id')->on('Orders');
            $table->foreign('Product_Code')->references('id')->on('Products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order__products');
    }
}
