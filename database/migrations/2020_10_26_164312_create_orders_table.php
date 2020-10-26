<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
                
                $table->id();
                $table->unsignedBigInteger('Customer_id');
    
                $table->date('OrderDate');
                $table->date('RequiredDate');
                $table->date('ShippedDate');
                $table->integer('Status');
                $table->string('Comments');
                
    
                
                $table->timestamps();
    
                $table->foreign('Customer_id')->references('id')->on('Customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
