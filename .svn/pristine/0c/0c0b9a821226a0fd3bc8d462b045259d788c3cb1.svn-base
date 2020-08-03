<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHocsinhLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocsinh_log', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('idhocsinh')->nullable();
             $table->integer('iduser')->nullable();
             $table->string('note')->nullable();
             $table->dateTime('updatetime')->nullable();
             $table->dateTime('datelog')->nullable();
             $table->integer('checked')->nullable();
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
        Schema::dropIfExists('hocsinh_log');
    }
}
