<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("access_groups", function(Blueprint $table){
            $table->increments("id");
            
            $table->string("title");
            $table->unsignedInteger("created_by");
            $table->unsignedInteger("updated_by")->nullable();
            
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
        Schema::drop("access_groups");
    }
}
