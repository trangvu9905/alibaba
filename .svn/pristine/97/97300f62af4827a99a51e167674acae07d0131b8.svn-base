<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->bigIncrements('id'); 
              $table->integer('type')->nullable();
               $table->text('noidung')->nullable();
               $table->dateTime('ngay')->nullable();
               $table->integer('iduser')->nullable();
               $table->integer('enable')->nullable();
               
                $table->integer('idhocvien')->nullable();
                $table->integer('idrelation')->nullable();
              
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
        Schema::dropIfExists('task');
    }
}
