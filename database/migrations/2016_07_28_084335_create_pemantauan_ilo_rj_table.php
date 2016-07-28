<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemantauanIloRjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ppi_ilo_rj', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_transaksi');
            $table->datetime('tgl_transaksi');
            $table->string('id_registrasi');
            $table->decimal('tb',10,2)->nullable();
            $table->decimal('bb',10,2)->nullable();
            $table->datetime('tgl_pemantauan')->nullable();
            $table->string('kd_pemeriksa')->nullable();
            $table->enum('is_suhu_more_38',['Ya','Tidak'])->nullable();
            $table->enum('is_tanda_peradangan',['Ya','Tidak'])->nullable();
            $table->enum('is_pus',['Ya','Tidak']);
            $table->enum('is_perforasi',['Ya','Tidak']);
            $table->string('antibiotik')->nullable();
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
        Schema::drop('tb_ppi_ilo_rj');
    }
}
