<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLophocBaihocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lophoc_baihoc', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('idlop')->nullable();
             $table->dateTime('ngay')->nullable();
             $table->text('baihoc')->nullable();
             $table->text('baitap')->nullable();
             $table->text('thongbao')->nullable();
             $table->integer('iduser')->nullable();
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
        Schema::dropIfExists('lophoc_baihoc');
    }
}
