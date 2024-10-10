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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'title');
            $table->string(column: 'category');
            $table->integer(column: 'est_value')->default(0);
            $table->integer(column: 'progress')->default(0);
            $table->string(column: 'doc_path')->nullable();
            $table->string(column: 'cover')->nullable();
            $table->unsignedBigInteger(column: 'client_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
