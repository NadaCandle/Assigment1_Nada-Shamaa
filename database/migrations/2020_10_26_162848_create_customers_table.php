<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('SalesrepEmployeeNum');

            $table->string('Name');
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('Phone');
            $table->string('Adress1');
            $table->string('Adress2');
            $table->string('State');
            $table->string('City');
            $table->integer('PostalCode');
            $table->string('Country');
            $table->integer('CreditLimit');
            

            
            $table->timestamps();

            $table->foreign('SalesrepEmplyeeNum')->references('id')->on('Employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
