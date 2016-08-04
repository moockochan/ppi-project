<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemantauanDecubitusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tb_ppi_decubitus', function (Blueprint $table) {
          $table->increments('id');
          $table->string('no_transaksi');
          $table->string('id_registrasi');
          $table->decimal('bb',5,2)->default(0);
          $table->decimal('tb',5,2)->default(0);
          $table->datetime('tgl_pencegahan')->nullable();
          $table->enum('is_alih_baring',['Dilakukan','Tidak dilakukan'])->nullable();
          $table->enum('is_mempertahankan_alat',['Dilakukan','Tidak dilakukan'])->nullable();
          $table->datetime('tgl_pemantauan')->nullable();
          $table->enum('is_kemerahan',['Ya','Tidak'])->nullable();
          $table->enum('is_lecet',['Ya','Tidak'])->nullable();
          $table->enum('is_decubitus',['Ya','Tidak'])->nullable();
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
        Schema::drop('tb_ppi_decubitus');
    }
}
