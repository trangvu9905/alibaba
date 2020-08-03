<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_cat', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('type')->nullable();
             $table->integer('iduser')->nullable();
             $table->string('name')->nullable();
             $table->text('noidung')->nullable();
             $table->timestamp('updatetime')->nullable();
             $table->string('cat')->nullable();    
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
        Schema::dropIfExists('email_cat');
    }
}
