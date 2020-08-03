<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_news', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('iduser')->nullable();
             $table->string('name')->nullable();
             $table->text('note')->nullable();
             $table->integer('type')->nullable();
             $table->timestamp('updatetime')->nullable();
             $table->integer('idchinhanh')->nullable();
            
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
        Schema::dropIfExists('feed_news');
    }
}
