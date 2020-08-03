<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestAutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_auto', function (Blueprint $table) {
               $table->bigIncrements('id'); 
               $table->string('textbox')->nullable();
               $table->string('selectoption')->nullable();
               $table->string('checkbox')->nullable();
               $table->string('radiobox')->nullable();
               $table->string('SL2')->nullable();
               $table->string('file1')->nullable();
               $table->string('groupblock')->nullable();
                  $table->string('hidden')->nullable();
                $table->dateTime('datetime')->nullable();
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
        Schema::dropIfExists('test_auto');
    }
}
