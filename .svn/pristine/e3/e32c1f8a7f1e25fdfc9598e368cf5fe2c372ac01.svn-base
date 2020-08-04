<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHocphiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocphi', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('iddangkygroup')->nullable();
             $table->dateTime('ngaythu')->nullable();
             $table->dateTime('updatetime')->nullable();
             $table->integer('iduser')->nullable();
             $table->string('MAHP')->nullable();
             $table->integer('type')->nullable();
             $table->integer('thucthu')->nullable();
             $table->integer('thanhtoan')->nullable();
             $table->string('thanhtoan_text')->nullable();
             $table->text('ghichu')->nullable();
            
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
        Schema::dropIfExists('hocphi');
    }
}
