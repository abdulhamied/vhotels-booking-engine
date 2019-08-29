<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_categories', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            
            $table->unsignedInteger("company_id");
                $table->foreign("company_id")
                        ->references("id")->on("companies");
                
            $table->unsignedInteger("hotel_id")->nullable();
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
        Schema::drop("room_categories");
    }
}
