<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaisanNhapXuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taisan_nhapxuat', function (Blueprint $table) {
            $table->bigIncrements('id'); 
              $table->integer('idchinhanh')->nullable();
               $table->integer('iddangkygroup')->nullable();
               $table->integer('iduser')->nullable();
               $table->dateTime('ngay')->nullable();
               $table->integer('idtaisan')->nullable();
               $table->integer('soluong')->nullable();
               $table->integer('dongia')->nullable();
               $table->integer('tongtien')->nullable();
               $table->text('ghichu')->nullable();
                $table->integer('type')->nullable();
                $table->integer('grouptype')->nullable();
                $table->integer('id_khuyenmai')->nullable();
                $table->integer('status')->nullable();
                $table->integer('CK')->nullable();
                $table->integer('idhocvien')->nullable();
                $table->integer('follow_khoahoc')->nullable();
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
        Schema::dropIfExists('taisan_nhapxuat');
    }
}
