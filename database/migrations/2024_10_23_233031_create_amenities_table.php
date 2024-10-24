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
        Schema::create('amenities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->string("school_yes_no")->nullable();
            $table->string("school_1_name")->nullable();
            $table->string("school_1_level")->nullable();
            $table->string("school_1_distance")->nullable();
            $table->string("school_2_name")->nullable();
            $table->string("school_2_level")->nullable();
            $table->string("school_2_distance")->nullable();
            $table->string("school_3_name")->nullable();
            $table->string("school_3_level")->nullable();
            $table->string("school_3_distance")->nullable();
            $table->string("chief")->nullable();
            $table->string("police_name")->nullable();
            $table->string("police_distance")->nullable();
            $table->string("hospital")->nullable();
            $table->string("hospital_1_name")->nullable();
            $table->string("hospital_1_distance")->nullable();
            $table->string("hospital_1_owner")->nullable();
            $table->string("hospital_2_name")->nullable();
            $table->string("hospital_2_distance")->nullable();
            $table->string("hospital_2_owner")->nullable();
            $table->string("hospital_3_name")->nullable();
            $table->string("hospital_3_distance")->nullable();
            $table->string("hostipal_3_owner")->nullable();
            $table->timestamps();
            $table->foreign("project_id")->references("id")->on("projects")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amenities');
    }
};
