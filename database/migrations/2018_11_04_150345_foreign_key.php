<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visuels', function (Blueprint $table) {

            $table->foreign('commune_id')->references('id')->on('communes')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('visuels', function (Blueprint $table) {

            $table->foreign('image_id')->references('id')->on('images')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visuels', function (Blueprint $table) {

            $table->dropForeign('visuels_commune_id_foreign');
        });

        Schema::table('visuels', function (Blueprint $table) {

            $table->dropForeign('visuels_image_id_foreign');
        });
    }
}
