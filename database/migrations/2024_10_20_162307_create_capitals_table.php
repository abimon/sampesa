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
        Schema::create('capitals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('business_name');
            $table->string('contact');
            $table->string('email');
            $table->string('business_address');
            $table->string('type_of_business');
            $table->string('reg_no');
            $table->string('licence_no');
            $table->string('operational_years');
            $table->string('revenue');
            $table->integer('amount');
            $table->string('purpose');
            $table->string('term');
            $table->string('repayment_schedule');
            $table->string('business_no');
            $table->string('kra_pin');
            $table->string('procure');
            $table->string('title_deed')->nullable();
            $table->string('bank_guarantee')->nullable();
            $table->string('fixed_deposit')->nullable();
            $table->string('logbook')->nullable();
            $table->string('files')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capitals');
    }
};
