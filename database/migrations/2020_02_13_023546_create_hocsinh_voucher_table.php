<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHocsinhVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocsinh_voucher', function (Blueprint $table) {
           $table->bigIncrements('id');
             $table->integer('idhocsinh')->nullable();
             $table->integer('iduser')->nullable();
             $table->integer('voucher')->nullable();
             $table->string('mota')->nullable();
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
        Schema::dropIfExists('hocsinh_voucher');
    }
}
