<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedDataPerusahaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->unsignedBigInteger('sektor_id');
           $table->string('nama_perusahaan', 200);
           $table->string('pekerjaan', 200);
           $table->string('lokasi', 200);
           $table->string('gaji', 200);
           $table->longtext('deskripsi');
           $table->longtext('syarat');
           $table->bigInteger('no_hp');
           $table->string('website', 200);
           $table->timestamps();

            $table->foreign('sektor_id')->references('id_sektor')->on('sektor')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
