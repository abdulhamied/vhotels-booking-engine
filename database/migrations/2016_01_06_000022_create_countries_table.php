<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numeric_code', 3);
            $table->string('name');
            $table->string('alpha_2_code', 2);
            $table->string('alpha_3_code', 3);
            $table->string('region_name');
            $table->string('sub_region_name');
            $table->string('region_numeric_code', 3);
            $table->string('sub_region_numeric_code', 3);
            $table->unsignedInteger("zone_id");
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
        Schema::drop("countries");
    }
}
