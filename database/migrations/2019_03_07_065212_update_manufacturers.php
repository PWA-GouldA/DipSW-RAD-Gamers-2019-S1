<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateManufacturers extends Migration
{
    /**
     * Details on creating migrations: https://laravel.com/docs/5.8/migrations
     */

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('manufacturers', function (Blueprint $table) {
            $table->string('country',2)->comment('Two letter country code');
            $table->string('website',320)->comment('URL')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('manufacturers', function (Blueprint $table) {
            //$table->dropColumn('country');
            $table->dropIfExists('country');
            //$table->dropColumn('website');
            $table->dropIfExists('website');
        });
    }
}
