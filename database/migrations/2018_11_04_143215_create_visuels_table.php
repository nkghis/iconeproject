<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisuelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visuels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adresse');
           /* $table->float('latitude',  8, 2)->nullable();
            $table->float('longitude',  8, 2)->nullable();*/
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->integer('image_id')->unsigned();
            $table->integer('commune_id')->unsigned();
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
        Schema::dropIfExists('visuels');
    }
}
