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
        Schema::create('guarantors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('amount');
            $table->string('fname');
            $table->string('mname');
            $table->string('sname');
            $table->string('contact');
            $table->string('occupation');
            $table->string('duration');
            $table->string('idcard');
            $table->string('slip');
            $table->string('fname1');
            $table->string('mname1');
            $table->string('sname1');
            $table->string('contact1');
            $table->string('occupation1');
            $table->string('duration1');
            $table->string('idcard1');
            $table->string('slip1');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guarantors');
    }
};
