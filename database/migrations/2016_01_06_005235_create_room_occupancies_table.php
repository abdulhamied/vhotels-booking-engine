<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomOccupanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_occupancies', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id')->unsigned()->index();
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->smallInteger('adult_occupancy')->default(0);
            $table->smallInteger('teen_occupancy')->default(0);
            $table->smallInteger('child_occupancy')->default(0);
            $table->smallInteger('infant_occupancy')->default(0);
            $table->smallInteger("person_occupancy")->default(0);
            
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
        Schema::drop("room_occupancies");
    }
}
