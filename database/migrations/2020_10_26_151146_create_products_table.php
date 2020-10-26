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
            $table->id('Code');
            $table->unsignedBigInteger('product_line_id');
            $table->string('Name');
            $table->integer('Scale');
            $table->string('Vendor');
            $table->string('PdtDescription');
            $table->integer('QtyInStock');
            $table->integer('BuyPrice');
            $table->string('MSRP');
            
            $table->timestamps();

            $table->foreign('product_line_id')->references('id')->on('product_lines');
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
