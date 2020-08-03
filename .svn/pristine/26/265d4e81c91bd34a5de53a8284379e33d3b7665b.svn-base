<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('makm')->nullable();
             $table->string('note')->nullable();
             $table->dateTime('ngaybatdau')->nullable();
             $table->dateTime('ngayketthuc')->nullable();
             $table->integer('giatri')->nullable();
             $table->integer('enable')->nullable();
             $table->integer('idtaisan')->nullable();
             $table->integer('soluong')->nullable();
           
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
        Schema::dropIfExists('khuyenmai');
    }
}
