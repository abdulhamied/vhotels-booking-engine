<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUiFavouriteLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("ui_favourite_links", function(Blueprint $table){
            $table->increments("id");
            
            $table->unsignedInteger("user_id");
            $table->string("title");
            $table->string("link");
            
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
        Schema::drop("ui_favourite_links");
    }
}
