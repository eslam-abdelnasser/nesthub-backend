<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('office_type') ; // 0  offices & 1 hot desks $ 2 fixed
            $table->integer('building_id')->unsigned() ;
            $table->integer('desks_available')->unsigned();
            $table->string('square_footage')->nullable();
            $table->integer('price');
            $table->integer('max');
            $table->integer('min');
            $table->text('key_features');
            $table->text('not_included');
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
        Schema::dropIfExists('offices');
    }
}
