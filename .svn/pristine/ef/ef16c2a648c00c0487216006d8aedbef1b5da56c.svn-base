<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetupTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setup_table', function (Blueprint $table) {
             $table->bigIncrements('id'); 
               $table->string('code')->nullable();
               $table->string('value1')->nullable();
               $table->string('value2')->nullable();
               $table->integer('iduser')->nullable();  
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
        Schema::dropIfExists('setup_table');
    }
}
