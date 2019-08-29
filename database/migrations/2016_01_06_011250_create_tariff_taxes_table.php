<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTariffTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_taxes', function(Blueprint $table) {
            $table->integer('tariff_id')->unsigned()->index();
            $table->foreign('tariff_id')->references('id')->on('tariffs')->onDelete('cascade');
            $table->integer('tax_id')->unsigned()->index();
            $table->foreign('tax_id')->references('id')->on('taxes')->onDelete('cascade');
            $table->boolean('inclusive')->default(true);
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
        Schema::drop("tariff_taxes");
    }
}
