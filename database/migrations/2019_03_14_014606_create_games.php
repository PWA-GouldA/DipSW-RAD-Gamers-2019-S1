<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Games', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name',255)->comment('Title fo the game');

            $table->smallInteger('min_age',false,true)->default(1)->comment('Minimum player age');
            $table->smallInteger('max_age',false,true)->nullable()->comment('Maximum player age');

            $table->smallInteger('min_players',false,true)->default(1)->comment('Minimum player age');
            $table->smallInteger('max_players',false,true)->nullable()->comment('Maximum player age');

            $table->integer('game_type_id',false, true)->default(0)->comment('ID from Game Types Table');
            $table->integer('manufacturer_id',false, true)->default(0)->comment('ID from Manufacturers Table');

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
        Schema::dropIfExists('Games');
    }
}
