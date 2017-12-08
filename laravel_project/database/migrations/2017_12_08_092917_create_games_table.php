<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team1_id');
            $table->integer('team2_id');
            $table->integer('score1');
            $table->integer('score2');
            $table->integer('odd1');
            $table->integer('odd2');
            $table->integer('odd_draw');
            $table->date('mdate');
            $table->string('stadium');
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
        Schema::dropIfExists('games');
    }
}
