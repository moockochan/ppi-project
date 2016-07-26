<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemakaianAntibiotikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ppi_pemakaian_antibiotik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_transaksi');
            $table->string('kd_obat');
            $table->datetime('tgl_awal');
            $table->datetime('tgl_akhir');
            $table->decimal('dosis',10,2);
            $table->enum('is_po_iv_im',['Ya','Tidak']);
            $table->enum('is_pengobatan',['Ya','Tidak']);
            $table->enum('is_profilaksis',['Ya','Tidak']);
            $table->timestamps();
            $table->string('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_ppi_pemakaian_antibiotik');
    }
}
