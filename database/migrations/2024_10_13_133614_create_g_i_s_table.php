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
        Schema::create('g_i_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('assigner');
            $table->string('visit_date');
            $table->string('long')->nullable();
            $table->string('lat')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('soil_type')->nullable();
            $table->string('area_value')->nullable();
            $table->string('property_status')->nullable();
            $table->string('tax_status')->nullable();
            $table->string('arrears')->nullable();
            $table->string('encumbrance')->nullable();
            $table->string('evidence')->nullable();
            $table->string('obstruction')->nullable();
            $table->string('purpose')->nullable();
            $table->string('site_cover')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('assigner')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g_i_s');
    }
};
