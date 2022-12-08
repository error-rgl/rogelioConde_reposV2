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
        Schema::create('orders', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->integerIncrements('pk_order', 11)->nullable(false);
            $table->Integer('fk_doctor')->unsigned()->nullable(false);
            $table->integer('fk_patient')->unsigned()->nullable(false);
            $table->integer('fk_user')->unsigned()->nullable(false);
            $table->char('code', 8)->nullable(false);
            $table->boolean('is_active')->nullable(false)->default(true);
            $table->timestamps();

            $table->foreign('fk_doctor')->references('pk_doctor')->on('doctors')->onDelete('cascade');
            $table->foreign('fk_patient')->references('pk_patient')->on('patients')->onDelete('cascade');
            $table->foreign('fk_user')->references('id')->on('users')->onDelete('cascade');
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
};
