<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblKriteria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kriteria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_kriteria');
            $table->string('nama_kriteria');
            $table->string('nilai_deal');
            $table->string('nama_aspek');
            $table->string('bobot_persen');
            $table->string('cf_persen');
            $table->string('sf_persen');
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
        Schema::dropIfExists('tbl_kriteria');
    }
}
