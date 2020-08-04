<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDangkiGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dangki_group', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->string('MADK')->nullable();
             $table->integer('idhocsinh')->nullable();
             $table->integer('iduser')->nullable();
             $table->integer('status')->nullable();
             $table->integer('tongtien')->nullable();
             $table->integer('idchinhanh')->nullable();
             $table->timestamp('updatetime')->nullable();        
             $table->text('ghichu')->nullable();
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
        Schema::dropIfExists('dangki_group');
    }
}
