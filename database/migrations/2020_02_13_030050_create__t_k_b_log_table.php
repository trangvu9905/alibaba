<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKBLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TKB_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idRelative')->nullable();
            $table->integer('fromdate')->nullable();
            $table->integer('todate')->nullable();
            $table->integer('iduser')->nullable();
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
        Schema::dropIfExists('TKB_log');
    }
}
