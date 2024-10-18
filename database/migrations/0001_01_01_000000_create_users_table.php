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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('sname')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->unique();
            $table->string('nationality')->nullable();
            $table->string('gender')->nullable();
            $table->string('idNumber')->nullable();
            $table->string('address')->nullable();
            $table->string('krapin')->nullable();
            $table->string('residence')->nullable();
            $table->string('dob')->nullable();
            $table->string('marital')->nullable();
            $table->string('disability')->nullable();
            $table->string('id_path')->nullable();
            $table->string('kra_path')->nullable();
            $table->string('pp_path')->nullable();
            $table->string('nok')->nullable();
            $table->string('nokcontact')->nullable();
            $table->string('nokrelationship')->nullable();
            $table->string('role_id')->default('3');
            $table->boolean('isAdmin')->default(false);
            $table->string('password');
            $table->boolean('id_approved')->default(false);
            $table->boolean('kra_approved')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
