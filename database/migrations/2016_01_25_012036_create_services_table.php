<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("services", function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->string("description");
            
            
            $table->unsignedInteger("company_id");
            $table->foreign("company_id")
                    ->references("id")->on("companies");
            
            $table->unsignedInteger("hotel_id");
            $table->foreign("hotel_id")
                    ->references("id")->on("hotels");
            
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
        Schema::drop("services");
    }
}
