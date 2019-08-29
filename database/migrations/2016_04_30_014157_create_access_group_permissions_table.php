<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessGroupPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("access_group_permissions", function(Blueprint $table){
            $table->increments("id");
            
            $table->unsignedInteger("access_group_id");
            $table->unsignedInteger("resource_permission_id");
            
            $table->unsignedInteger("created_by");
            $table->unsignedInteger("updated_by")->nullable();
            
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
        Schema::drop("access_group_permissions");
    }
}
