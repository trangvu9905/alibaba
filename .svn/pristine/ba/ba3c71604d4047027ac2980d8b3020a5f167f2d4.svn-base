<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatgroupUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatgroup_user', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->integer('idgroup')->nullable();
            $table->integer('iduser')->nullable();
            $table->integer('typeview')->nullable();
             $table->timestamp('updatetime')->nullable();
             $table->integer('idinvite')->nullable();
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
        Schema::dropIfExists('chatgroup_user');
    }
}
