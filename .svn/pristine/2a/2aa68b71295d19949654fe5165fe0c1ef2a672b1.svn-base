<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailIboxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_ibox', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('fromuser')->nullable();
             $table->integer('touser')->nullable();
             $table->integer('type')->nullable();
             $table->dateTime('date')->nullable();
             $table->integer('start')->nullable();
             $table->integer('label')->nullable();
             $table->integer('idhocsinh')->nullable();
             $table->integer('readed')->nullable();
             $table->text('subject')->nullable();
             $table->text('body')->nullable();
              $table->integer('receipt_del')->nullable();
              $table->integer('send_del')->nullable();
             
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
        Schema::dropIfExists('mail_ibox');
    }
}
