<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("policies", function(Blueprint $table){
            $table->increments("id");
            $table->unsignedInteger("hotel_id");
            $table->string("name");
            $table->string("type");
            $table->text('data');
            
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
        Schema::drop("policies");
    }
}
