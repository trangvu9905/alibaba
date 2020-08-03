<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLophocDiemdanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lophoc_diemdanh', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('idlop')->nullable();
             $table->integer('idjoint')->nullable();
             $table->integer('idhocvien')->nullable();
             $table->text('note')->nullable();
             $table->integer('iduser')->nullable();
             $table->integer('enable')->nullable();
              $table->dateTime('ngay')->nullable();
             $table->dateTime('updatetime')->nullable();
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
        Schema::dropIfExists('lophoc_diemdanh');
    }
}
