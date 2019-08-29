<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTariffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariffs', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id')->unsigned()->index()->nullable();
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->integer('room_category_id')->unsigned()->index()->nullable();
            $table->foreign('room_category_id')->references('id')->on('room_categories');
            $table->integer('currency_id')->unsigned()->index();
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->integer('zone_id')->unsigned()->index();
            $table->foreign('zone_id')->references('id')->on('zones');
            $table->datetime('start_date');
            $table->datetime('end_date');
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
            $table->integer('min_nights')->nullable();
            $table->integer('max_nights')->nullable();
            
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
        Schema::drop("tariffs");
    }
}
