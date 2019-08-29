<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("room_inventories", function(Blueprint $table){
            $table->increments("id");
            $table->unsignedInteger("hotel_id")->nullable();
            $table->unsignedInteger("room_category_id");
            $table->date('date')->nullable();
            
            
            $table->integer("room_count")->default(0);
            $table->integer("room_count_booked")->default(0);
            $table->integer("room_count_blocked")->default(0);

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
        Schema::drop("room_inventories");
    }
}
