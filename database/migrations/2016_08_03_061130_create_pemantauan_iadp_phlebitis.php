<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemantauanIadpPhlebitis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ppi_iadp_phlebitis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_transaksi');
            $table->string('id_registrasi');
            $table->decimal('bb',10,2)->default(0);
            $table->decimal('tb',10,2)->default(0);
            $table->enum('is_faktor_resiko',['Ya','Tidak'])->nullable();
            $table->enum('is_pemasangan_kateter_v',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_pasang')->nullable();
            $table->datetime('tgl_lepas')->nullable();
            $table->enum('is_hand_hygiene',['Ya','Tidak'])->nullable();
            $table->enum('is_teknis_steril',['Ya','Tidak'])->nullable();
            $table->enum('is_disinfeksi',['Ya','Tidak'])->nullable();
            $table->enum('is_iv_line_16_26',['Ya','Tidak'])->nullable();
            $table->enum('is_adp',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_pemantauan')->nullable();
            $table->enum('is_hand_hygiene_pre_inj',['Ya','Tidak'])->nullable();
            $table->enum('is_alkohol_pre_inj',['Ya','Tidak'])->nullable();
            $table->enum('is_fixatic',['Ya','Tidak'])->nullable();
            $table->enum('is_dresing',['Ya','Tidak'])->nullable();
            $table->enum('is_selang_bersih',['Ya','Tidak'])->nullable();
            $table->enum('is_lemak_protein_darah',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_assesment')->nullable();
            $table->enum('is_kemerahan',['Ya','Tidak'])->nullable();
            $table->enum('is_edema_lokal',['Ya','Tidak'])->nullable();
            $table->enum('is_nyeri_lokal',['Ya','Tidak'])->nullable();
            $table->enum('is_demam',['Ya','Tidak'])->nullable();
            $table->enum('is_antibiotik',['Ya','Tidak'])->nullable();
            $table->enum('is_wb',['Ya','Tidak'])->nullable();
            $table->enum('is_protein',['Ya','Tidak'])->nullable();
            $table->enum('is_rl',['Ya','Tidak'])->nullable();
            $table->enum('is_kultur_darah',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_kultur_darah')->nullable();
            $table->string('hasil_kultur_darah')->nullable();
            $table->enum('is_kultur_pus',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_kultur_pus')->nullable();
            $table->string('hasil_kultur_pus')->nullable();
            $table->enum('is_phlebitis',['Ya','Tidak'])->nullable();
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
        Schema::drop('tb_ppi_iadp_phlebitis');
    }
}
