<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("hotel_services", function(Blueprint $table){
            $table->increments("id");
            
            $table->unsignedInteger("hotel_id");
            $table->foreign("hotel_id")
                    ->references("id")->on("hotels");
            
            $table->unsignedInteger("service_id");
            $table->foreign("service_id")
                    ->references("id")->on("services");
            
            
            $table->text("description")->nullable();
            
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
        Schema::drop("hotel_services");
    }
}
