<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatgroupTextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatgroup_text', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->integer('idgroup')->nullable();
            $table->integer('iduser')->nullable();
            $table->text('text')->nullable();
            $table->integer('type')->nullable();
             $table->integer('readed')->nullable();
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
        Schema::dropIfExists('chatgroup_text');
    }
}
