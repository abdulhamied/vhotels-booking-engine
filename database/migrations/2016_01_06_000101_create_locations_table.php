<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations' , function(Blueprint $table){
            $table->increments("id");
            $table->string("place");
            
            $table->unsignedInteger("country_id");
            $table->foreign('country_id')->references('id')->on('countries');

            $table->unsignedInteger("city_id");
            $table->foreign('city_id')->references('id')->on('cities');
            
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
        Schema::drop("locations");
    }
}
