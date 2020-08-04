<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedNewsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_news_users', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('idchinhanh')->nullable();
             $table->integer('idfeed')->nullable();
             $table->timestamp('updatetime')->nullable();
             $table->integer('readed')->nullable();
             $table->string('idlevel')->nullable();
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
        Schema::dropIfExists('feed_news_users');
    }
}
