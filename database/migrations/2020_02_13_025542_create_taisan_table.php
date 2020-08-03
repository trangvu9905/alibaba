<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaisanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taisan', function (Blueprint $table) {
             $table->bigIncrements('id'); 
              $table->integer('idcat')->nullable();
              $table->integer('iduser')->nullable();
               $table->string('Masanpham')->nullable();
               $table->string('ten')->nullable();
               $table->text('diengiai')->nullable();
               $table->integer('gia')->nullable();
               $table->string('donvi')->nullable();
                $table->integer('enable')->nullable();
                $table->integer('idchinhanh')->nullable();
                 $table->integer('dongia')->nullable();
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
        Schema::dropIfExists('taisan');
    }
}
