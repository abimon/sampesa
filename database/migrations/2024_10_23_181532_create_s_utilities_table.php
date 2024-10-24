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
        Schema::create('s_utilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->string("electricity")->nullable();
            $table->string("electricity_yes_phase")->nullable();
            $table->string("electricity_no_distance")->nullable();
            $table->string("water")->nullable();
            $table->string("water_yes_source")->nullable();
            $table->string("water_description")->nullable();
            $table->string("water_no_distance")->nullable();
            $table->string("sewer_line")->nullable();
            $table->string("sewer_yes_distance")->nullable();
            $table->string("access_roads")->nullable();
            $table->string("access_roads_yes_type")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_utilities');
    }
};
