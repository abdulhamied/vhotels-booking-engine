<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealTypeRateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("meal_type_rate_logs" , function(Blueprint $table){
            $table->increments("id");
            $table->unsignedInteger("meal_type_id");
            $table->unsignedInteger("created_by");
            
            $table->decimal("adult_rate", 15, 4)->nullable();
            $table->decimal("teen_rate", 15, 4)->nullable();
            $table->decimal("child_rate", 15, 4)->nullable();
            $table->decimal("infant_rate", 15, 4)->nullable();
            
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
        Schema::drop("meal_type_rate_logs");
        
        
    }
}
