<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessGroupResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("access_group_resources" , function(Blueprint $table){
            $table->increments("id");
            
            $table->unsignedInteger("access_group_id");
            $table->unsignedInteger("resource_access_id");
            
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
        Schema::drop("access_group_resources");
    }
}
