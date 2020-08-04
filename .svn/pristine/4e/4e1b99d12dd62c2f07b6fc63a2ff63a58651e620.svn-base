<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemdanhStyle1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diemdanh_style1', function (Blueprint $table) {
               $table->bigIncrements('id');
             $table->integer('iduser')->nullable();
             $table->integer('giaovien')->nullable();
             $table->integer('hocsinh')->nullable();
             $table->integer('iddangki')->nullable();
             $table->integer('idlop')->nullable();
             $table->integer('checked')->nullable();
             $table->integer('enable')->nullable();
             $table->string('giogiac')->nullable();
             $table->string('homework')->nullable();
             $table->string('attitude')->nullable();
             $table->string('comment')->nullable();    
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
        Schema::dropIfExists('diemdanh_style1');
    }
}
