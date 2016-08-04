<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemantauanHapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ppi_hap', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_transaksi');
            $table->string('id_registrasi');
            $table->decimal('bb',10,2)->default(0);
            $table->decimal('tb',10,2)->default(0);
            $table->datetime('tgl_pencegahan')->nullable();
            $table->enum('is_oral_hygiene',['Ya','Tidak'])->nullable();
            $table->enum('is_suction',['Ya','Tidak'])->nullable();
            $table->enum('is_fisioterapi_dada',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_pemantauan')->nullable();
            $table->enum('suara_nafas',['Tidak dinilai','Vesikuler','Wheezing','Ronchi','Cracles'])->nullable();
            $table->enum('rontgen',['Pneumonia','Tidak pneunomonia','Tidak dilakukan'])->nullable();
            $table->enum('is_pnemunomia_hap',['Ya','Tidak'])->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
            $table->string('deleted_at')->nullable();
            $table->string('vuser')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_ppi_hap');
    }
}
