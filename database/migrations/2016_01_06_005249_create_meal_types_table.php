<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_types', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            
            $table->decimal("adult_rate", 15, 4)->nullable();
            $table->decimal("teen_rate", 15, 4)->nullable();
            $table->decimal("child_rate", 15, 4)->nullable();
            $table->decimal("infant_rate", 15, 4)->nullable();
            
            $table->integer('hotel_id')->unsigned()->index();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            
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
        Schema::drop("meal_types");
    }
}
