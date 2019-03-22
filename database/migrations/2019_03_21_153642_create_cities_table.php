<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string ('geoname_id',32);
            $table->string ('locale_code',4);
            $table->string ('continent_code',4);
            $table->string ('continent_name',128);
            $table->string ('country_iso_code',4);
            $table->string ('country_name',255);
            $table->string ('subdivision_1_iso_code',4)->nullable();
            $table->string ('subdivision_1_name',255)->nullable();
            $table->string ('subdivision_2_iso_code',4)->nullable();
            $table->string ('subdivision_2_name',255)->nullable();
            $table->string ('city_name',255);
            $table->string ('metro_code',6)->nullable();
            $table->string ('time_zone',128);
            $table->boolean ('is_in_european_union')->default(false);

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
        Schema::dropIfExists('cities');
    }
}
