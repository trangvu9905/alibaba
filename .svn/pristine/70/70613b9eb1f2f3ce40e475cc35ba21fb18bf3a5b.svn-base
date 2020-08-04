<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLophocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lophoc', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('idchuongtrinh')->nullable();
             $table->integer('idkhoahoc')->nullable();
             $table->string('Malop')->nullable();
             $table->string('ten')->nullable();
             $table->dateTime('ngaybatdau')->nullable();
             $table->dateTime('ngayketthuc')->nullable();
             $table->integer('iduser')->nullable();
             $table->integer('enable')->nullable();
             $table->integer('idchinhanh')->nullable();
             $table->integer('buoihoc')->nullable();
             $table->text('mota')->nullable();
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
        Schema::dropIfExists('lophoc');
    }
}
