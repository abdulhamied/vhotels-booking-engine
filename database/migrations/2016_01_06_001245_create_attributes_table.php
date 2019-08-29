<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function(Blueprint $table)
        {
                $table->increments('id');
                $table->string("key");
                $table->string("value");
                $table->string("display_name");
                $table->integer("sort_order")->default(0);
                $table->string("type");
                
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
        Schema::drop("attributes");
    }
}
