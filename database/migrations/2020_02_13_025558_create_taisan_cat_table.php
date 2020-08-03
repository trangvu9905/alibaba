<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaisanCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taisan_cat', function (Blueprint $table) {
             $table->bigIncrements('id'); 
              $table->integer('iduser')->nullable();
               $table->string('Maloai')->nullable();
               $table->string('ten')->nullable();
               $table->text('diengiai')->nullable();
                $table->integer('enable')->nullable();
                $table->integer('idchinhanh')->nullable();
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
        Schema::dropIfExists('taisan_cat');
    }
}
