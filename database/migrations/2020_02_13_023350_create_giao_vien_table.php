<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaoVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giao_vien', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('iduser')->nullable();
             $table->string('makhachhang')->nullable();
             $table->string('hoten')->nullable();
             $table->string('mota')->nullable();
             $table->string('diachi')->nullable();
             $table->string('Mst')->nullable();
             $table->string('dienthoai')->nullable();
             $table->string('ghichu')->nullable();
             $table->integer('KH_canhan')->nullable();
             $table->integer('KH_congty')->nullable();
             $table->integer('KH_nhanvien')->nullable();
             $table->integer('enable')->nullable();
             $table->timestamp('updatetime')->nullable();
             $table->integer('congno')->nullable();
             $table->integer('danhdau')->nullable();
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
        Schema::dropIfExists('giao_vien');
    }
}
