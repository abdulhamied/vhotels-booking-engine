<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_availabilities', function(Blueprint $table){
            $table->increments("id");
            $table->date("selected_date");
            $table->enum("type" ,['close', 'open'])->default('close');
            $table->text("reason");
            
            $table->unsignedInteger("company_id")->index();
            $table->unsignedInteger("room_category_id")->index();
            $table->unsignedInteger("meal_type_id")->index();
            $table->unsignedInteger("hotel_id")->index();
            
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
        Schema::drop("room_availabilities");
    }
}
