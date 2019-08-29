<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_plans', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('meal_type_id')->unsigned()->index();
            $table->foreign('meal_type_id')->references('id')->on('meal_types')->onDelete('cascade');
            $table->integer('tariff_id')->unsigned()->index();
            $table->foreign('tariff_id')->references('id')->on('tariffs')->onDelete('cascade');
            $table->boolean('is_default')->default(false);
            $table->float('adult_rate')->nullable()->default(0.00);
            $table->float('child_rate')->nullable()->default(0.00);
            $table->float('infant_rate')->nullable()->default(0.00);
            $table->float('teen_rate')->nullable()->default(0.00);
            
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
        Schema::drop('meal_plans');
    }
}
