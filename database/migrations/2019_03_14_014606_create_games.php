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
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name',255)->comment('Title of the game');

            $table->unsignedSmallInteger('min_age',false,true)->default(1)->comment('Minimum player age');
            $table->unsignedSmallInteger('max_age',false,true)->nullable()->comment('Maximum player age');

            $table->unsignedSmallInteger('min_players',false,true)->default(1)->comment('Minimum player age');
            $table->unsignedSmallInteger('max_players',false,true)->nullable()->comment('Maximum player age');

            $table->bigInteger('game_type_id',false, true)->default(0)->comment('ID from Game Types Table');
            $table->bigInteger('manufacturer_id',false, true)->default(0)->comment('ID from Manufacturers Table');

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
