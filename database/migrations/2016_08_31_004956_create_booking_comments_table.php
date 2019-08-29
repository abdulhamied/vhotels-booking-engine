<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("booking_comments", function(Blueprint $table){
            $table->increments("id");
            $table->string("booking_code");
            $table->string("type");
            $table->string("comment");
            $table->boolean("is_flagged")->default(false);
            
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
        Schema::drop("booking_comments");
    }
}
