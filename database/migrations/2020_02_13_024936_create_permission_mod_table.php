<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionModTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_mod', function (Blueprint $table) {
           $table->bigIncrements('id');
               $table->string('Ma')->nullable();
               $table->integer('idcat')->nullable();
               $table->string('name')->nullable();
               $table->integer('iduser')->nullable();
               $table->integer('enable')->nullable();
               $table->text('R_note')->nullable();
               $table->text('W_note')->nullable();
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
        Schema::dropIfExists('permission_mod');
    }
}
