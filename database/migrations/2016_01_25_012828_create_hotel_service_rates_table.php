<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelServiceRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("hotel_service_rates" , function(Blueprint $table){
            $table->increments("id");
            $table->unsignedInteger("hotel_service_id");
            $table->unsignedInteger("company_id");
            $table->unsignedInteger("hotel_id");
            $table->dateTime("start_date");
            $table->dateTime("end_date");
            
            $table->float("adult_rate");
            $table->float("child_rate");
            $table->float("infant_rate");
            $table->float("teen_rate");
            
            $table->integer("number_of_days");
            $table->string("time_details");
            
            $table->unsignedInteger("created_by");
            $table->foreign("created_by")
                    ->references("id")->on("users");
            $table->unsignedInteger("updated_by")->nullable();
            $table->foreign("updated_by")
                    ->references("id")->on("users");
            
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
        Schema::drop("hotel_service_rates");
    }
}
