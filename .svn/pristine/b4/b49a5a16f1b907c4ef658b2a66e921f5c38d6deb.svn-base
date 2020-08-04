<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_template', function (Blueprint $table) {
              $table->bigIncrements('id'); 
               $table->integer('iduser')->nullable();
               $table->string('name')->nullable();
               $table->integer('idmod')->nullable();
              
               $table->integer('per_r')->nullable();
               $table->integer('per_w')->nullable();
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
        Schema::dropIfExists('permission_template');
    }
}
