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
        Schema::create('devnatures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->string("sketch_map_file")->nullable();
            $table->string("type_of_development")->nullable();
            $table->string("sketch_map_recommendations")->nullable();
            $table->timestamps();
            $table->foreign("project_id")->references("id")->on("projects")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devnatures');
    }
};
