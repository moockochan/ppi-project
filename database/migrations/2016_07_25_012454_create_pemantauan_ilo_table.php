<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemantauanIloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ppi_ilo_ri', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_transaksi')->nullable();
            $table->datetime('tgl_transaksi')->nullable();
            $table->string('id_registrasi');
            $table->decimal('tb',10,2)->nullable();
            $table->decimal('bb',10,2)->nullable();
            $table->enum('is_kultur',['Ya','Tidak'])->nullable();
            $table->datetime('tgl_kultur')->nullable();
            $table->string('hasil_kultur')->nullable();
            $table->datetime('tgl_pemantauan')->nullable();
            $table->enum('is_suhu_more_38',['Ya','Tidak'])->nullable();
            $table->enum('is_drainase',['Ya','Tidak'])->nullable();
            $table->enum('is_pus',['Ya','Tidak'])->nullable();
            $table->enum('is_perforasi',['Ya','Tidak'])->nullable();
            $table->enum('is_fistula',['Ya','Tidak'])->nullable();
            $table->enum('is_ilo',['Ya','Tidak'])->nullable();
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
        Schema::drop('tb_ppi_ilo_ri');
    }
}
