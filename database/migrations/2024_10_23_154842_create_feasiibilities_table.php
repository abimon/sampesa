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
        Schema::create('feasiibilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->unique();
            $table->string('common_area_name')->nullable();
            $table->string('county')->nullable();
            $table->string('sub_county')->nullable();
            $table->string('ward')->nullable();
            $table->string('nearest_town')->nullable();
            $table->string('plot_no')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('soil_type')->nullable();
            $table->string('area_value')->nullable();
            $table->string('tax_status')->nullable();
            $table->string('arrears_years_from')->nullable();
            $table->string('arrears_years_to')->nullable();
            $table->string('arrears_evidence')->nullable();
            $table->string('encumbrance')->nullable();
            $table->string('encumbrance_type')->nullable();
            $table->string('encumbrance_evidence')->nullable();
            $table->string('any_loans')->nullable();
            $table->string('loan_statement')->nullable();
            $table->string('any_lease')->nullable();
            $table->integer('lease_period')->nullable();
            $table->string('obstruction')->nullable();
            $table->timestamps();
            $table->foreign("project_id")->references("id")->on("projects")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feasiibilities');
    }
};
