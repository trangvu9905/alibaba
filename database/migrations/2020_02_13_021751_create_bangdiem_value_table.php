<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangdiemValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangdiem_value', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->integer('idbangdiem')->nullable();
            $table->string('value')->nullable();
             $table->integer('idhv')->nullable();
             $table->integer('iddk')->nullable();
              $table->integer('idlop')->nullable();
              $table->string('codecol')->nullable();
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
        Schema::dropIfExists('bangdiem_value');
    }
}
