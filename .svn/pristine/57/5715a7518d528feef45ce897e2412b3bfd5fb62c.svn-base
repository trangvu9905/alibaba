<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLopTKBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lop_TKB', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('idweek')->nullable();
             $table->integer('idlop')->nullable();
             $table->integer('iduser')->nullable();
             $table->dateTime('fromdate')->nullable();
             $table->dateTime('todate')->nullable();
             $table->integer('idgiaovien')->nullable();
             $table->integer('idphonghoc')->nullable();
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
        Schema::dropIfExists('lop_TKB');
    }
}
