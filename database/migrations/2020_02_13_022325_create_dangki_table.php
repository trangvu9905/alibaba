<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDangkiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dangki', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('MADK')->nullable();
             $table->integer('idhocsinh')->nullable();
             $table->integer('idkhoahoc')->nullable();
             $table->integer('idkhuyenmai')->nullable();
             $table->integer('idlop')->nullable();
             $table->integer('hocthu')->nullable();
             $table->integer('giam')->nullable();
             $table->integer('hocphi')->nullable();
             $table->integer('phitailieu')->nullable();
             $table->integer('iduser')->nullable();
             $table->integer('Tonghocphi')->nullable();
             $table->timestamp('updatetime')->nullable();
             $table->text('HTTT')->nullable();
             $table->text('ghichu')->nullable();
              $table->integer('enable')->nullable();
             $table->integer('idkhuyenmai_pass')->nullable();
             $table->integer('status')->nullable();
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
        Schema::dropIfExists('dangki');
    }
}
