<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function(Blueprint $table)
        {
                $table->increments('id');
                
                $table->unsignedInteger("company_id");
                $table->foreign("company_id")
                        ->references("id")->on("companies");
                $table->unsignedInteger("created_by");
                $table->foreign("created_by")
                        ->references("id")->on("users");
                
                $table->string('addressline');
                $table->string('telephone');
                $table->string('fax')->nullable();
                $table->string('email');
                $table->string('website')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("contacts");
    }
}
