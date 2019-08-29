<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->decimal('latitude',30,15)->nullable();
            $table->decimal('longitude',30,15)->nullable();
            $table->integer('country_id')->unsigned()->index();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->integer('city_id')->unsigned()->index()->nullable();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');			
            $table->integer('location_id')->unsigned()->index()->nullable();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');			
            $table->integer('contact_id')->unsigned()->index()->nullable();
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->longText('description');
            $table->longText('policies')->nullable();
            $table->longText('information')->nullable();
            $table->integer('star_rating');
            $table->integer('priority')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('active')->default(true);
            
            $table->integer("distance_from_airport")->nullable();
            $table->integer("time_from_airport")->nullable();
            $table->string("island_dimension")->nullable();
            
            $table->integer('company_id')->unsigned()->index();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');

            $table->string("check_in")->nullable();
            $table->string("check_out")->nullable();
            
            $table->integer('infant_age_range_id')->unsigned()->index();
            $table->foreign('infant_age_range_id')->references('id')->on('age_ranges');
            $table->integer('child_age_range_id')->unsigned()->index();
            $table->foreign('child_age_range_id')->references('id')->on('age_ranges');
            $table->integer('teen_age_range_id')->unsigned()->index()->nullable();
            $table->foreign('teen_age_range_id')->references('id')->on('age_ranges');
            $table->integer('adult_age_range_id')->unsigned()->index();
            $table->foreign('adult_age_range_id')->references('id')->on('age_ranges');
            
            $table->text('age_ranges');
            
            $table->text("detail")->nullable();

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
        Schema::drop("hotels");
    }
}
