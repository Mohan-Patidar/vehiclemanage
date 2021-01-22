<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEinsuranceAndEtaxAndFitnessAndEfitnessAndPucAndEpucToVehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->date("einsurance")->nullable();;
            $table->date("etax")->nullable();;
            $table->date("epuc")->nullable();;
            $table->date("efitness")->nullable();;
            $table->string("puc")->nullable();
            $table->string("fitness")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            //
        });
    }
}
