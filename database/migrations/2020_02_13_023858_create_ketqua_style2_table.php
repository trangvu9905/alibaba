<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetquaStyle2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketqua_style2', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('emailsend')->nullable();
             $table->integer('iduser')->nullable();
             $table->integer('idgiaovien')->nullable();
             $table->integer('idhocsinh')->nullable();
             $table->integer('iddangky')->nullable();
             $table->integer('idlop')->nullable();
             $table->string('type')->nullable();
             $table->string('bloclk1')->nullable();
             $table->string('thaidohoc')->nullable();
             $table->string('homework')->nullable();
             $table->string('bloclk11')->nullable();
             $table->string('nghe')->nullable();
             $table->string('noi')->nullable();
             $table->string('doc')->nullable();
             $table->string('viet')->nullable();
             $table->string('tuvung')->nullable();
             $table->string('nguphap')->nullable();
             $table->string('tienbotrongky')->nullable();
             $table->string('nhanxetkhac')->nullable();
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
        Schema::dropIfExists('ketqua_style2');
    }
}
