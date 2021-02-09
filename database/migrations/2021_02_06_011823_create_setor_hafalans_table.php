<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetorHafalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setor_hafalans', function (Blueprint $table) {
            $table->id();
            $table->string('surat_mulai');
            $table->integer('ayat_mulai');
            $table->string('surat_akhir');
            $table->integer('ayat_akhir');
            $table->string('audio');
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
        Schema::dropIfExists('setor_hafalans');
    }
}
