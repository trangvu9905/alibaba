<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLophocLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lophoc_log', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('iduser')->nullable();
             $table->integer('idlop')->nullable();
             $table->integer('count')->nullable();
             $table->integer('id_tkb')->nullable();
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
        Schema::dropIfExists('lophoc_log');
    }
}
