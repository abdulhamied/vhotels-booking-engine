<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnhancementRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("enhancement_rates", function(Blueprint $table){
            $table->increments("id");
            
            $table->unsignedInteger("enhancement_id")->nullable();
            
            $table->date("start");
            $table->date("end");
            
            $table->float("rate");
            $table->string('type');
            
            $table->integer("stock");
            $table->integer("stock_sold");
            
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
        Schema::drop("enhancement_rates");
    }
}
