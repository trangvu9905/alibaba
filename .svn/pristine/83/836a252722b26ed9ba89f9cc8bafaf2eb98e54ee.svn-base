<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangdiemLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangdiem_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('iduser')->nullable();
            $table->timestamp('updatetime')->nullable();
             $table->integer('idcat')->nullable();
              $table->integer('idlop')->nullable();
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
        Schema::dropIfExists('bangdiem_log');
    }
}
