<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("resource_accesses", function(Blueprint $table){
            $table->increments("id");
            
            $table->string("name");
            
            $table->string("resource_table");
            $table->string("resource_type");
            $table->unsignedInteger("resource_id");
            $table->string("resource_value");
            $table->tinyInteger("access")->default(1);
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
        Schema::drop("resource_accesses");
    }
}
