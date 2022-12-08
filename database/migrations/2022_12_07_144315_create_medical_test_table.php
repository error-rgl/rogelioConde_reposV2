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
        Schema::create('medical_test', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->integerIncrements('pk_medical_test', 11)->nullable(false);
            $table->string('name', 50)->nullable(false);
            $table->text('description')->nullable();
            $table->float('price', 7,2)->nullable(false);
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
        Schema::dropIfExists('medical_test');
    }
};
