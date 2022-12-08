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
        Schema::create('order_details', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->integerIncrements('pk_order_detail', 11)->nullable(false);
            $table->integer('fk_order')->unsigned()->nullable(false);
            $table->integer('fk_medical_test')->unsigned()->nullable(false);
            $table->float('price', 7,2)->nullable(false);
            $table->timestamps();

            $table->foreign('fk_order')->references('pk_order')->on('orders')->onDelete('cascade');
            $table->foreign('fk_medical_test')->references('pk_medical_test')->on('medical_test')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
};
