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
        Schema::create('amdin_barbers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('b_id')->nullable();
            $table->string('s_time')->nullable();
            $table->string('e_time')->nullable();
            $table->string('duration')->nullable();
            $table->string('date')->nullable();
            $table->string('barber')->nullable();
            $table->string('slot')->nullable();
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
        Schema::dropIfExists('amdin_barbers');
    }
};
