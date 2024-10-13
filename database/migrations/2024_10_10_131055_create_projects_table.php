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
            $table->string(column:'client_name');
            $table->string(column:'client_contact');
            $table->string(column:'client_id');
            $table->string(column:'county');
            $table->string(column:'town');
            $table->string(column:'area');
            $table->string(column:'status')->default('Open');
            $table->string(column:'start_date')->nullable();
            $table->string(column: 'cover')->nullable();
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
