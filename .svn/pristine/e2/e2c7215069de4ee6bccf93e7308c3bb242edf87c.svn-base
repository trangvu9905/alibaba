<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanSuChamcongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_su_chamcong', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('iduser')->nullable();
             $table->integer('idnhansu')->nullable();
             $table->dateTime('ngay')->nullable();
             $table->dateTime('updatetime')->nullable();
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
        Schema::dropIfExists('nhan_su_chamcong');
    }
}
