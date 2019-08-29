<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zones', function(Blueprint $table)
        {
                $table->increments('id');
                $table->integer('hotel_id')->unsigned()->index();
                $table->foreign('hotel_id')->references('id')->on('hotels');
                $table->timestamp('start')->default(DB::raw('NOW()'));
                $table->timestamp('end')->nullable();
                $table->enum('status', [ 'active', 'expired' ])->default('active');
                $table->string('name');
                $table->text('description')->nullable();
                
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
        Schema::drop("zones");
    }
}
