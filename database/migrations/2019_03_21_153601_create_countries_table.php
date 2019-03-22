<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('geoname_id')->default(0);
            $table->string ('locale_code',6);
            $table->string ('continent_code',4);
            $table->string ('continent_name',128);
            $table->string ('country_iso_code',4);
            $table->string ('country_name',255);
            $table->boolean('is_in_european_union')->default(false);
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
        Schema::dropIfExists('countries');
    }
}
