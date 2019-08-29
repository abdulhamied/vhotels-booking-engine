<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("package_rates", function(Blueprint $table){
            $table->increments("id");
            
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
            
            
            $table->unsignedInteger("package_id");
            $table->foreign("package_id")
                    ->references("id")->on("packages");
           
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
        Schema::drop("package_rates");
    }
}
