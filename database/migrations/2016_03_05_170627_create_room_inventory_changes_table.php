<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomInventoryChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_inventory_changes', function(Blueprint $table){
            $table->increments('id');

            $table->unsignedInteger("room_inventory_id");
            $table->integer("previous_count");
            $table->integer("current_count");

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
        Schema::drop("room_inventory_changes");
    }
}
