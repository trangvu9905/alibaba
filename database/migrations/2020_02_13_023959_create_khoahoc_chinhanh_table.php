<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhoahocChinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khoahoc_chinhanh', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('iduser')->nullable();
             $table->integer('idchinhanh')->nullable();
             $table->integer('idchuongtrinh')->nullable();
             $table->integer('idkhoahoc')->nullable();
             $table->integer('sogio')->nullable();
             $table->integer('HP_full')->nullable();
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
        Schema::dropIfExists('khoahoc_chinhanh');
    }
}
