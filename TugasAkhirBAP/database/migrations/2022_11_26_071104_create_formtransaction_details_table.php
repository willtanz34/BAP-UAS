<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormtransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formtransaction_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('Productid')->nullable();
            $table->string('Transactionnumber')->nullable();
            $table->integer('Qty')->nullable();
            $table->integer('Price')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('formtransaction_details');
    }
}
