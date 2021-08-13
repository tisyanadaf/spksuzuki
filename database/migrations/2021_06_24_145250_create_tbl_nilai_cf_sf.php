<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblNilaiCfSf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_nilai_cf_sf', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_karyawan');
            $table->string('id_aspek');
            $table->integer('nilai_cf');
            $table->integer('nilai_sf');
            $table->integer('nilai_total');
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
        Schema::dropIfExists('tbl_nilai_cf_sf');
    }
}
