<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionModCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_mod_cat', function (Blueprint $table) {
               $table->bigIncrements('id');
               $table->string('name')->nullable();
               $table->integer('stt')->nullable();
               $table->integer('iduser')->nullable();
               $table->string('Ma')->nullable();
               $table->integer('enable')->nullable();
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
        Schema::dropIfExists('permission_mod_cat');
    }
}
