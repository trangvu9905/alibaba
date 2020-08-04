<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonghocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonghoc', function (Blueprint $table) {
            $table->bigIncrements('id'); 
               $table->integer('idchinhanh')->nullable();
               $table->string('ten')->nullable();
               $table->text('mota')->nullable();
               $table->text('trangthietbi')->nullable();
               $table->integer('iduser')->nullable();
               $table->integer('enable')->nullable();
              
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
        Schema::dropIfExists('phonghoc');
    }
}
