<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangdiemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangdiem', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('idhocsinh')->nullable();
             $table->integer('idlophoc')->nullable();
             $table->integer('diem')->nullable();
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
        Schema::dropIfExists('bangdiem');
    }
}
