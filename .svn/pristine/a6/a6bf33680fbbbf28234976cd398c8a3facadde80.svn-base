<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionJoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_join', function (Blueprint $table) {
               $table->bigIncrements('id');
               $table->integer('iduser')->nullable();
               $table->integer('idmode')->nullable();
               $table->integer('idtemplate')->nullable();
               $table->integer('lever')->nullable();
               $table->integer('permission')->nullable();
               $table->integer('per_r')->nullable();
               $table->integer('per_a')->nullable();
               $table->integer('per_e')->nullable();
               $table->integer('per_w')->nullable();
               $table->integer('idcreate')->nullable();
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
        Schema::dropIfExists('permission_join');
    }
}
