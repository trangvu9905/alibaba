<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFolderFiiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folder_fiise', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('idfolder')->nullable();
             $table->integer('iduser')->nullable();
             $table->string('name')->nullable();
             $table->string('mota')->nullable();
             $table->integer('filesize')->nullable();
             $table->string('typefile')->nullable();
             $table->timestamp('updatetime')->nullable();
             $table->string('store')->nullable();
             $table->integer('link')->nullable();
             $table->integer('type')->nullable();
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
        Schema::dropIfExists('folder_fiise');
    }
}
