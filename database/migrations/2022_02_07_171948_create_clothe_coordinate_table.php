<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClotheCoordinateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothe_coordinate', function (Blueprint $table) {
            $table->integer('clothe_id')->unsigned();
            $table->integer('coordinate_id')->unsigned();
            $table->primary(['clothe_id', 'coordinate_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothe_coordinate');
    }
}
