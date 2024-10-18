<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('logbooks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('make');
            $table->string('cmodel');
            $table->string('type');
            $table->string('year');
            $table->string('mileage');
            $table->string('condition');
            $table->string('energy');
            $table->string('transition_type');
            $table->string('color');
            $table->string('lights_type');
            $table->string('airbags');
            $table->string('engine_number');
            $table->string('chasis_number');
            $table->string('number_plate');
            $table->string('engine_size');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logbooks');
    }
};
