<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuongtrinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuongtrinh', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->integer('iduser')->nullable();
            $table->integer('idchinhanh')->nullable();
            $table->string('logo')->nullable();
            $table->string('ten')->nullable();
            $table->integer('stt')->nullable();
              $table->text('mota')->nullable();
               $table->integer('enable')->nullable();
               $table->string('MACT')->nullable();
                $table->integer('style_diemdanh')->nullable();
                $table->integer('style_diem')->nullable();
                $table->string('testdauvao')->nullable();
                $table->text('baigioithieu')->nullable();
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
        Schema::dropIfExists('chuongtrinh');
    }
}
