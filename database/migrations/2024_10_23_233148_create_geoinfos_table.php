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
        Schema::create('geoinfos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->string("latitude")->nullable();
            $table->string("longitude")->nullable();
            $table->string("site_photo")->nullable();
            $table->string("site_description")->nullable();
            $table->timestamps();
            $table->foreign("project_id")->references("id")->on("projects")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('geoinfos');
    }
};
