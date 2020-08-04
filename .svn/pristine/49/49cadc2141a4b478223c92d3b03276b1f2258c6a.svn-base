<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanSuGhichuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_su_ghichu', function (Blueprint $table) {
           $table->bigIncrements('id');
             $table->integer('idnhansu')->nullable();
             $table->text('ghichu')->nullable();
             $table->dateTime('ngay')->nullable();
             $table->dateTime('updatetime')->nullable();
             $table->integer('iduser')->nullable();
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
        Schema::dropIfExists('nhan_su_ghichu');
    }
}
