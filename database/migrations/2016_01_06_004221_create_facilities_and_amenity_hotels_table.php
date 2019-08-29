<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesAndAmenityHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities_and_amenity_hotels', function(Blueprint $table) {
            $table->increments("id");
            $table->integer('facilities_and_amenity_id')->unsigned()->index();
            $table->foreign('facilities_and_amenity_id')->references('id')->on('facilities_and_amenities')->onDelete('cascade');
            $table->integer('hotel_id')->unsigned()->index();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            
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
        Schema::drop("facilities_and_amenity_hotels");
    }
}
