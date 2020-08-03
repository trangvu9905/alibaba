<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTkbRiskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tkb_risk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('iduser')->nullable();
            $table->integer('idchinhanh')->nullable();
            $table->dateTime('updatetime')->nullable();
            $table->dateTime('fromdate')->nullable();
            $table->dateTime('todate')->nullable();
            $table->text('mota')->nullable();
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
        Schema::dropIfExists('tkb_risk');
    }
}
