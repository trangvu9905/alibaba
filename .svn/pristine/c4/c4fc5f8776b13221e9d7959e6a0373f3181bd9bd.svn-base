<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chinhanh', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->integer('iduser')->nullable();
            $table->string('logo')->nullable();
            $table->string('machinhanh')->nullable();
            $table->string('ten')->nullable();
            $table->text('diengiai')->nullable();
             $table->timestamp('updatetime')->nullable();
             $table->integer('enable')->nullable();
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
        Schema::dropIfExists('chinhanh');
    }
}
