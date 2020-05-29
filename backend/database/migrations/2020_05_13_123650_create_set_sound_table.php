<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetSoundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_sound', function (Blueprint $table) {
            $table->id();
            $table->integer('set_id')->unsigned();
            $table->integer('sound_id')->unsigned();
            $table->integer('volume');

            $table->foreign('set_id')->references('id')->on('sets');
            $table->foreign('sound_id')->references('id')->on('sounds');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('set_sound', function(Blueprint $table) {
            $table->dropForeign('set_sound_set_id_foreign');
            $table->dropForeign('set_sound_sound_id_foreign');
        });

        Schema::dropIfExists('set_sound');
    }
}
