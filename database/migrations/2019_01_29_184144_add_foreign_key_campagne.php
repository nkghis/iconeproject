<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyCampagne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visuels', function (Blueprint $table) {

            $table->foreign('campagne_id')->references('id')->on('campagnes')
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

            $table->dropForeign('campagnes_campagne_id_foreign');
        });
    }
}
