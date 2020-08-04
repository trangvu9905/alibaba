<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhoahocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khoahoc', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('idchuongtrinh')->nullable();
             $table->integer('idchinhanh')->nullable();
             $table->string('ten')->nullable();
             $table->string('makh')->nullable();
             $table->integer('stt')->nullable();
             $table->string('capdo')->nullable();
             $table->string('sogio')->nullable();
             $table->integer('HP_full')->nullable();
             $table->integer('thoiluong')->nullable();
             $table->integer('iduser')->nullable();
             $table->integer('status')->nullable();
             $table->integer('enable')->nullable();
              $table->string('ghichu')->nullable();
              $table->string('maubangdiem')->nullable();
              $table->string('trangthai')->nullable();
              $table->string('giaotrinh')->nullable();
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
        Schema::dropIfExists('khoahoc');
    }
}
