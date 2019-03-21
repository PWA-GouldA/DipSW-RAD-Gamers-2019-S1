<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufacturers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('Manufacturer name');
            $table->string('city')->comment('Manufacturer HQ City');
            $table->string('country')->comment('Manufacturer HQ Country');
            $table->string('website')->comment('Manufacturer Web Site URL');
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
        Schema::dropIfExists('manufacturers');
    }
}
