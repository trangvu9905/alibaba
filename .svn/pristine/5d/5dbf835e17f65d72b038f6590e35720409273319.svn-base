<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangdiemColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangdiem_column', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idcat')->nullable();
            $table->string('header')->nullable();
            $table->string('code')->nullable();
            $table->integer('stt')->nullable();
             $table->string('namecolumn')->nullable();
               $table->integer('value')->nullable();
             $table->string('congthuc')->nullable();
             $table->integer('autorun')->nullable();
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
        Schema::dropIfExists('bangdiem_column');
    }
}
