<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("offers", function(Blueprint $table){
            $table->increments("id");
            $table->unsignedInteger("offer_rule_id");
            
            $table->string("offer_type");
            
            $table->string("title");
            $table->text("description");
            $table->text("policies");
            
            $table->date("booking_date_from");
            $table->date("booking_date_to");
            
            $table->date("travel_date_from");
            $table->date("travel_date_to");
            
            $table->enum("discount_type", ['fixed' , 'percent'])->default('percent');
            $table->decimal("discount_value", 15, 4);
            
            $table->unsignedInteger("hotel_id");
            $table->unsignedInteger("room_category_id");
            
            $table->text("data");
            
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
        Schema::drop("offers");
    }
}
