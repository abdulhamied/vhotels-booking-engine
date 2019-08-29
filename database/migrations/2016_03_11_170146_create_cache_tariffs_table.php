<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCacheTariffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("cache_tariffs", function(Blueprint $table){
           $table->increments("id");
           
           $table->unsignedInteger("country_id");
           $table->unsignedInteger("tariff_id");
           $table->unsignedInteger("hotel_id");
           $table->unsignedInteger("room_type_id");
           $table->unsignedInteger("currency_id");
           $table->unsignedInteger("zone_id");
           $table->unsignedInteger("min_nights");
           $table->unsignedInteger("max_nights");
           $table->date("date");
           $table->float('single');
            $table->float('double')->nullable();
            $table->float('twin')->nullable();
            $table->float('triple')->nullable();
            $table->float('quadruple')->nullable();
            $table->float('pax_5')->nullable();
            $table->float('pax_6')->nullable();
            $table->float('pax_7')->nullable();
            $table->float('pax_8')->nullable();
            $table->float('pax_9')->nullable();
            $table->float('pax_10')->nullable();
            $table->float('child_rate')->nullable();
            $table->float('teen_rate')->nullable();
            $table->float('infant_rate')->nullable();
            $table->float('baby_cot_rate')->nullable();
            $table->float('extra_bed_rate')->nullable();
           $table->text('meal_plans');
           $table->text("tax_data")->nullable();
           
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
        Schema::drop("cache_tariffs");
    }
}
