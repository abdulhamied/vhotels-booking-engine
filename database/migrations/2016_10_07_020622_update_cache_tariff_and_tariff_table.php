<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCacheTariffAndTariffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {       
        Schema::table('cache_tariffs', function($table)
        {
            $table->float('single')->nullable(false)->default(0)->change();
            $table->float('double')->nullable(false)->default(0)->change();
            $table->float('twin')->nullable(false)->default(0)->change();
            $table->float('triple')->nullable(false)->default(0)->change();
            $table->float('quadruple')->nullable(false)->default(0)->change();
            $table->float('pax_5')->nullable(false)->default(0)->change();
            $table->float('pax_6')->nullable(false)->default(0)->change();
            $table->float('pax_7')->nullable(false)->default(0)->change();
            $table->float('pax_8')->nullable(false)->default(0)->change();
            $table->float('pax_9')->nullable(false)->default(0)->change();
            $table->float('pax_10')->nullable(false)->default(0)->change();
            $table->float('child_rate')->nullable(false)->default(0)->change();
            $table->float('teen_rate')->nullable(false)->default(0)->change();
            $table->float('infant_rate')->nullable(false)->default(0)->change();
            $table->float('baby_cot_rate')->nullable(false)->default(0)->change();
            $table->float('extra_bed_rate')->nullable(false)->default(0)->change();
        });
        Schema::table('tariffs', function($table)
        {
            $table->float('single')->nullable(false)->default(0)->change();
            $table->float('double')->nullable(false)->default(0)->change();
            $table->float('twin')->nullable(false)->default(0)->change();
            $table->float('triple')->nullable(false)->default(0)->change();
            $table->float('quadruple')->nullable(false)->default(0)->change();
            $table->float('pax_5')->nullable(false)->default(0)->change();
            $table->float('pax_6')->nullable(false)->default(0)->change();
            $table->float('pax_7')->nullable(false)->default(0)->change();
            $table->float('pax_8')->nullable(false)->default(0)->change();
            $table->float('pax_9')->nullable(false)->default(0)->change();
            $table->float('pax_10')->nullable(false)->default(0)->change();
            $table->float('child_rate')->nullable(false)->default(0)->change();
            $table->float('teen_rate')->nullable(false)->default(0)->change();
            $table->float('infant_rate')->nullable(false)->default(0)->change();
            $table->float('baby_cot_rate')->nullable(false)->default(0)->change();
            $table->float('extra_bed_rate')->nullable(false)->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
