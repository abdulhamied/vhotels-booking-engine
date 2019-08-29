<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("resource_permissions", function(Blueprint $table){
            $table->increments("id");
            
            $table->string("name");
            $table->string("resource_table");
            
            $table->tinyInteger("list")->default(1);
            $table->tinyInteger("get")->default(1);
            $table->tinyInteger("create")->default(1);
            $table->tinyInteger("update")->default(1);
            
//            $table->unsignedInteger("user_id");
            
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
        Schema::drop("resource_permissions");
    }
}
