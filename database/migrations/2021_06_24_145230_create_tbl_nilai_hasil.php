<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblNilaiHasil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_nilai_hasil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_karyawan');
            $table->string('nilai_akhir');
            $table->string('ranking');
            $table->string('notes');
            $table->string('kesimpulan');
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
        Schema::dropIfExists('tbl_nilai_hasil');
    }
}
