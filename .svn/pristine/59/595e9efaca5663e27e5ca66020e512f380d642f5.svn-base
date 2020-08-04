<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLophocJoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lophoc_join', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('idhocvien')->nullable();
             $table->integer('iddangky')->nullable();
             $table->integer('idlop')->nullable();
             $table->integer('iduser')->nullable();
             $table->integer('idkhoahoc')->nullable();
              $table->dateTime('fromdate')->nullable();
              $table->dateTime('todate')->nullable();
             $table->dateTime('updatetime')->nullable();
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
        Schema::dropIfExists('lophoc_join');
    }
}
