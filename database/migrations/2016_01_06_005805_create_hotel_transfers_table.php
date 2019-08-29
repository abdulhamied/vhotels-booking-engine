<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_transfers', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id')->unsigned()->index();
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->integer('currency_id')->unsigned()->index();
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->integer('infant_age_range_id')->unsigned()->index();
            $table->foreign('infant_age_range_id')->references('id')->on('age_ranges');
            $table->integer('child_age_range_id')->unsigned()->index();
            $table->foreign('child_age_range_id')->references('id')->on('age_ranges');
            $table->integer('teen_age_range_id')->unsigned()->index();
            $table->foreign('teen_age_range_id')->references('id')->on('age_ranges');
            $table->integer('adult_age_range_id')->unsigned()->index();
            $table->foreign('adult_age_range_id')->references('id')->on('age_ranges');
            $table->text('age_ranges');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->string('vessel');
            $table->text('description');
            $table->integer('occupancy_adult');
            $table->integer('occupancy_teen');
            $table->integer('occupancy_child');
            $table->integer('occupancy_infant');
            $table->enum('type', ['oneway', 'return']);
            $table->float('adult_amount');
            $table->float('teen_amount');
            $table->float('child_amount');
            $table->float('infant_amount');

            $table->boolean("is_default")->default(true);
            
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
        Schema::drop("hotel_transfers");
    }
}
