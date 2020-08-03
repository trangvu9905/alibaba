<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHocsinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocsinh', function (Blueprint $table) {
             $table->bigIncrements('id');
            // $table->integer('iduser')->nullable();
            //  $table->integer('enable')->nullable();
            //  $table->dateTime('updatetime')->nullable();
            //$table->string('block1')->nullable();
            $table->string('ten')->nullable();
            $table->dateTime('namsinh')->nullable();
            //  $table->string('imageupload')->nullable();
            //  $table->string('MAHS')->nullable();
            //  $table->string('matkhau')->nullable();
            //  $table->string('ten')->nullable();
            //  $table->string('nguon')->nullable();
            //  $table->string('lop')->nullable();
            //  $table->string('truong')->nullable();
            //  $table->string('ngaysinh')->nullable();
            //  $table->string('dienthoai')->nullable();
            //  $table->string('PHHS_diachi')->nullable();
            //  $table->string('block2')->nullable();
            //  $table->string('PHHS_ten')->nullable();
            //  $table->string('PHHS_dienthoai')->nullable();
            //  $table->string('email')->nullable();
            //  $table->string('PHHS_facebook')->nullable();
            //  $table->integer('type')->nullable();
            //  $table->integer('flag')->nullable();
            //  $table->string('pass_test')->nullable();
            //  $table->dateTime('namsinh')->nullable();
            // $table->string('block21')->nullable();
            // $table->string('PHHS_ten2')->nullable();
            // $table->string('PHHS_dienthoai2')->nullable();
            // $table->string('email2')->nullable();
            // $table->string('PHHS_facebook2')->nullable();
            // $table->text('ghichu')->nullable();
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
        Schema::dropIfExists('hocsinh');
    }
}
