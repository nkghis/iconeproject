<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConcurentConfrereToVisuelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visuels', function (Blueprint $table) {
            $table->integer('estconcurent')->nullable();
            $table->integer('estconfrere')->nullable();
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
            $table->dropColumn('estconcurent');
            $table->dropColumn('estconfrere');
        });
    }
}
