<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailSendboxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_sendbox', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('idinbox')->nullable();
             $table->dateTime('date')->nullable();
             $table->integer('iduser')->nullable();
             $table->integer('touser')->nullable();
             $table->text('touser_str')->nullable();
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
        Schema::dropIfExists('mail_sendbox');
    }
}
