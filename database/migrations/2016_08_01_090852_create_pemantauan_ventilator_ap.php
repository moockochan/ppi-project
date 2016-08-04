<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemantauanVentilatorAp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ppi_ventilator_ap', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_transaksi');
            $table->string('id_registrasi');
            $table->decimal('bb',10,2)->default(0);
            $table->decimal('tb',10,2)->default(0);
            $table->enum('is_faktor_resiko',['Ya','Tidak'])->nullable();
            $table->enum('is_ventilator',['Ya','Tidak'])->nullable();
            $table->string('no_ventilator')->nullable();
            $table->datetime('tgl_pasang')->nullable();
            $table->datetime('tgl_lepas')->nullable();
            $table->datetime('tgl_pemantauan')->nullable();
            $table->enum('is_memantau_ett_cut_presure',['Ya','Tidak'])->nullable();
            $table->enum('is_eva_kepala_30_450',['Ya','Tidak'])->nullable();
            $table->enum('is_oral_hygiene',['Ya','Tidak'])->nullable();
            $table->enum('is_peptic_ulcer',['Ya','Tidak'])->nullable();
            $table->enum('is_deep_urine',['Ya','Tidak'])->nullable();
            $table->enum('is_penggunaan_sedatif',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_assesment')->nullable();
            $table->enum('is_penurunan_saturasi_o2',['Ya','Tidak'])->nullable();
            $table->enum('is_temperatur_stabil',['Ya','Tidak'])->nullable();
            $table->enum('is_leukopenia',['Ya','Tidak'])->nullable();
            $table->enum('is_sputum',['Ya','Tidak'])->nullable();
            $table->enum('is_sekresi_meningkat',['Ya','Tidak'])->nullable();
            $table->enum('is_wheezing',['Ya','Tidak'])->nullable();
            $table->enum('is_batuk',['Ya','Tidak'])->nullable();
            $table->enum('is_bradycardia',['Ya','Tidak'])->nullable();
            $table->enum('is_kultur',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_kultur')->nullable();
            $table->string('hasil_kultur')->nullable();
            $table->enum('is_pneumonia',['Ya','Tidak'])->nullable();
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
        Schema::drop('tb_ppi_ventilator_ap');
    }
}
