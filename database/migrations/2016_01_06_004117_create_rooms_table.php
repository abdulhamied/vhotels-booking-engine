<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('room_category_id')->unsigned()->index();
            $table->foreign('room_category_id')->references('id')->on('room_categories')->onUpdate('cascade');
            $table->integer('hotel_id')->unsigned()->index();
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->string("code");
            $table->text('description');
            $table->boolean('baby_cot_availability')->default(false);
            $table->boolean('extra_bed_allowed')->default(false);
            $table->integer("number_of_rooms")->default(0);
            
            
            
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
        Schema::drop("rooms");
    }
}
