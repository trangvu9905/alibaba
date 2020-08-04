<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHocsinhTestDauvaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocsinh_test_dauvao', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('idhocvien')->nullable();
             $table->integer('iduser')->nullable();
             $table->integer('idbangdiem')->nullable();
             $table->integer('idbangdiem_cat')->nullable();
             $table->string('ghichu')->nullable();
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
        Schema::dropIfExists('hocsinh_test_dauvao');
    }
}
