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
            $table->boolean('encumbrance')->default(false);
            $table->string('encumbrance_type')->nullable();
            $table->string('encumbrance_evidence')->nullable();
            $table->boolean('any_loans')->defaut(false);
            $table->string('loan_statement')->nullable();
            $table->boolean('any_lease')->defaut(false);
            $table->integer('lease_period')->nullable();
            $table->string('obstruction')->nullable();
            $table->string('doc_type')->nullable();
            $table->string('holder_name')->nullable();
            $table->string('number')->nullable();
            $table->string('doc_file')->nullable();
            $table->string('means')->nullable();
            $table->string('land_search')->nullable();
            $table->string('land_search_evdnc')->nullable();
            $table->string('survey_map')->nullable();
            $table->string('any_current_devs')->nullable();
            $table->string('current_devs_pic')->nullable();
            $table->string('current_dev_desc')->nullable();
            $table->string('neighboring_devs')->nullable();
            $table->string('single_available')->nullable();
            $table->string('single_demand')->nullable();
            $table->string('single_rent')->nullable();
            $table->string('double_available')->nullable();
            $table->string('double_demand')->nullable();
            $table->string('double_rent')->nullable();
            $table->string('bedsitter_available')->nullable();
            $table->string('bedsitter_demand')->nullable();
            $table->string('bedsitter_rent')->nullable();
            $table->string('one_bd_available')->nullable();
            $table->string('one_bd_demand')->nullable();
            $table->string('one_bd_rent')->nullable();
            $table->string('two_bd_available')->nullable();
            $table->string('two_bd_demand')->nullable();
            $table->string('two_bd_rent')->nullable();
            $table->string('three_bd_available')->nullable();
            $table->string('three_bd_demand')->nullable();
            $table->string('three_bd_rent')->nullable();
            $table->string('mansionette_available')->nullable();
            $table->string('mansionette_demand')->nullable();
            $table->string('mansionette_rent')->nullable();
            $table->string('offices_available')->nullable();
            $table->string('offices_demand')->nullable();
            $table->string('offices_rent')->nullable();
            $table->string('space_shops_available')->nullable();
            $table->string('space_shops_demand')->nullable();
            $table->string('space_shops_rent')->nullable();
            $table->string('warehouse_available')->nullable();
            $table->string('warehouses_demand')->nullable();
            $table->string('warehouse_rent')->nullable();
            $table->string('hotels_air_bnb_available')->nullable();
            $table->string('hotels_air_bnb_demand')->nullable();
            $table->string('hotels_air_bnb_rent')->nullable();
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
