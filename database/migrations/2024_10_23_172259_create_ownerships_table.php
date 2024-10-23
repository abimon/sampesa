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
        Schema::create('ownerships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->unique();
            $table->string("doc_type")->nullable();
            $table->string("holder_name")->nullable();
            $table->string("number")->nullable();
            $table->string("doc_file")->nullable();
            $table->string("means")->nullable();
            $table->string("land_search")->nullable();
            $table->string("land_search_evdnc")->nullable();
            $table->string("survey_map")->nullable();
            $table->timestamps();
            $table->foreign("project_id")->references("id")->on("projects")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ownerships');
    }
};
