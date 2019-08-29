<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("packages" , function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->text("description");
            $table->text("terms_and_conditions");
            
            $table->date("booking_date_from");
            $table->date("booking_date_to");
            
            $table->date("travel_date_from");
            $table->date("travel_date_to");
            
            $table->integer("adult_occupancy_from");
            $table->integer("adult_occupancy_to");
            
            $table->integer("child_occupancy_from");
            $table->integer("child_occupancy_to");
            
            $table->integer("teen_occupancy_from");
            $table->integer("teen_occupancy_to");
            
            $table->integer("infant_occupancy_from");
            $table->integer("infant_occupancy_to");
            
            $table->decimal("total", 15, 4);
            $table->string("type");
            $table->string("offer_type");
            
            
            
            $table->unsignedInteger("hotel_id");
            $table->foreign("hotel_id")
                    ->references("id")->on("hotels");
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
        Schema::drop("packages");
    }
}
