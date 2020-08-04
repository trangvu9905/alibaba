<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanSuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_su', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->string('block1')->nullable();
             $table->integer('idchinhanh')->nullable();
            $table->string('hinhanh')->nullable();
            $table->string('Mans')->nullable();
            $table->string('hoten')->nullable();
            $table->string('diachi')->nullable();
            $table->string('dienthoai')->nullable();
            $table->string('facebook')->nullable();
            $table->string('email')->nullable();
            $table->string('block2')->nullable();
            $table->string('trinhdo')->nullable();
            $table->string('nghiepvu')->nullable();
            $table->string('soCMNN')->nullable();
            $table->string('vitri')->nullable();
            $table->string('tinhtrang')->nullable();
            $table->string('chuyennganh')->nullable();
            $table->string('chucvu')->nullable();
            $table->text('ghichu')->nullable();
            $table->integer('iduser')->nullable();
            $table->integer('enable')->nullable();
             $table->dateTime('ngaysinh')->nullable();
               $table->dateTime('updatetime')->nullable();
            $table->string('tentaikhoan')->nullable();
            $table->string('matkhau')->nullable();
            $table->dateTime('hansudung')->nullable();
            $table->dateTime('ngaythamgia')->nullable();
            $table->integer('ngaynghiphep')->nullable();
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
        Schema::dropIfExists('nhan_su');
    }
}
