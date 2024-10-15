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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacancy_id');
            $table->string('applicant_name');
            $table->string('applicant_email');
            $table->string('applicant_contact');
            $table->string('nationality');
            $table->string('address');
            $table->string('residence');
            $table->longText('cover_letter')->nullable();
            $table->string('cv')->nullable();
            $table->string('status')->nullable();
            $table->string('message')->nullable();
            $table->timestamps();
            $table->foreign('vacancy_id')->references('id')->on('vacancies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
