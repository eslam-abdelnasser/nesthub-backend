<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingFacilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_facility', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('facilities_id')->unsigned();
            $table->integer('building_id')->unsigned();
            $table->foreign('facilities_id')->references('id')->on('facilities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('building_id')->references('id')->on('buildings')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('building_facility');
    }
}
