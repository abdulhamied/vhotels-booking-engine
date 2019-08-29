<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            
            $table->enum('markup_type', ['fixed','percent'])->default('fixed');
            $table->decimal('markup', 10, 2)->default(0);
            $table->integer('contact_id')->unsigned()->index();
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->integer('city_id')->unsigned()->index();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->enum('status', ['requested', 'approved'])->default('requested');
            
            
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
        Schema::drop("agents");
    }
}
