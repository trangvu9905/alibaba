<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThuChiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thu_chi', function (Blueprint $table) {
            $table->bigIncrements('id'); 
               $table->integer('iduser')->nullable();
               $table->integer('idchinhanh')->nullable();
              $table->string('MAPT')->nullable();
               $table->dateTime('datecreate')->nullable();
               $table->dateTime('ngay')->nullable();
               $table->integer('type')->nullable();
               $table->string('nguoinoptien')->nullable();
               $table->string('diachi')->nullable();
               $table->string('lydo')->nullable();
               $table->integer('tongtien')->nullable();
              $table->string('bangthu')->nullable();
              $table->string('sochungtu')->nullable();
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
        Schema::dropIfExists('thu_chi');
    }
}
