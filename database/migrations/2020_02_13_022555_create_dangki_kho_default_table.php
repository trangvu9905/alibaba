<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDangkiKhoDefaultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dangki_kho_default', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('idchinhanh')->nullable();
             $table->integer('idtaisan')->nullable();
             $table->integer('soluong')->nullable();
             $table->timestamp('updatetime')->nullable();        
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
        Schema::dropIfExists('dangki_kho_default');
    }
}
