<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemantauanIsk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ppi_isk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_transaksi');
            $table->string('id_registrasi');
            $table->decimal('bb',10,2)->default(0);
            $table->decimal('tb',10,2)->default(0);
            $table->enum('is_faktor_resiko',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_pasang')->nullable();
            $table->datetime('tgl_lepas')->nullable();
            $table->boolean('is_revisi_urine')->default(false);
            $table->boolean('is_pasien_terminal')->default(false);
            $table->boolean('is_balance_cairan')->default(false);
            $table->boolean('is_program_operasi')->default(false);
            $table->boolean('is_immobilisasi')->default(false);
            $table->enum('is_teknis_steril',['Ya','Tidak'])->nullable();
            $table->enum('is_hand_hygiene',['Ya','Tidak'])->nullable();
            $table->enum('is_disinfeksi',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_pemantauan')->nullable();
            $table->enum('is_aliran_lancar',['Ya','Tidak'])->nullable();
            $table->enum('is_selang_bersih',['Ya','Tidak'])->nullable();
            $table->enum('is_closed',['Ya','Tidak'])->nullable();
            $table->enum('is_pengosongan_urine',['Ya','Tidak'])->nullable();
            $table->enum('is_urine_bag_menggantung',['Ya','Tidak'])->nullable();
            $table->enum('is_perineal',['Ya','Tidak'])->nullable();
            $table->enum('is_urine_bag_rendah',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_assesment')->nullable();
            $table->enum('is_suhu_more_38',['Ya','Tidak'])->nullable();
            $table->enum('is_nyeri',['Ya','Tidak'])->nullable();
            $table->enum('is_pus',['Ya','Tidak'])->nullable();
            $table->enum('is_leukosit_urine',['Ya','Tidak'])->nullable();
            $table->enum('is_pemeriksaan_urine',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_urine')->nullable();
            $table->string('hasil_urine')->nullable();
            $table->enum('is_biakan',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_biakan')->nullable();
            $table->string('hasil_biakan')->nullable();
            $table->enum('is_isk',['Ya','Tidak'])->nullable();
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
        Schema::drop('tb_ppi_isk');
    }
}
