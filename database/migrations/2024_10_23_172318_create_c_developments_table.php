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
        Schema::create('c_developments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->unique();
            $table->string("any_current_devs")->nullable();
            $table->string("current_devs_pic")->nullable();
            $table->string("current_dev_desc")->nullable();
            $table->string("neighboring_devs")->nullable();
            $table->string("single_available")->nullable();
            $table->string("single_demand")->nullable();
            $table->string("single_rent")->nullable();
            $table->string("double_available")->nullable();
            $table->string("double_demand")->nullable();
            $table->string("double_rent")->nullable();
            $table->string("bedsitter_available")->nullable();
            $table->string("bedsitter_demand")->nullable();
            $table->string("bedsitter_rent")->nullable();
            $table->string("one_bd_available")->nullable();
            $table->string("one_bd_demand")->nullable();
            $table->string("one_bd_rent")->nullable();
            $table->string("two_bd_available")->nullable();
            $table->string("two_bd_demand")->nullable();
            $table->string("two_bd_rent")->nullable();
            $table->string("three_bd_available")->nullable();
            $table->string("three_bd_demand")->nullable();
            $table->string("three_bd_rent")->nullable();
            $table->string("mansionette_available")->nullable();
            $table->string("mansionette_demand")->nullable();
            $table->string("mansionette_rent")->nullable();
            $table->string("offices_available")->nullable();
            $table->string("offices_demand")->nullable();
            $table->string("offices_rent")->nullable();
            $table->string("space_shops_available")->nullable();
            $table->string("space_shops_demand")->nullable();
            $table->string("space_shops_rent")->nullable();
            $table->string("warehouse_available")->nullable();
            $table->string("warehouses_demand")->nullable();
            $table->string("warehouse_rent")->nullable();
            $table->string("hotels_air_bnb_available")->nullable();
            $table->string("hotels_air_bnb_demand")->nullable();
            $table->string("hotels_air_bnb_rent")->nullable();
            $table->timestamps();
            $table->foreign("project_id")->references("id")->on("projects")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_developments');
    }
};
