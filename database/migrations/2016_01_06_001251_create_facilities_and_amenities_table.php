<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesAndAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities_and_amenities', function(Blueprint $table)
        {
                $table->increments('id');
                $table->enum('type', ['facility','amenity']);
                $table->string('name');
                $table->string("icon")->nullable();
                $table->string("icon_type")->nullable();
                $table->string("icon_name")->nullable();

                $table->unsignedInteger("company_id");
                $table->foreign("company_id")
                        ->references("id")->on("companies");
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
        Schema::drop("facilities_and_amenities");
    }
}
