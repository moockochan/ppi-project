<?php /*
<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- No Transaksi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_transaksi', 'No Transaksi:') !!}
    {!! Form::text('no_transaksi', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Registrasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_registrasi', 'Id Registrasi:') !!}
    {!! Form::text('id_registrasi', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Kultur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_kultur', 'Is Kultur:') !!}
    {!! Form::text('is_kultur', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Kultur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_kultur', 'Tgl Kultur:') !!}
    {!! Form::date('tgl_kultur', null, ['class' => 'form-control']) !!}
</div>

<!-- Hasil Kultur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hasil_kultur', 'Hasil Kultur:') !!}
    {!! Form::text('hasil_kultur', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Pemantauan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_pemantauan', 'Tgl Pemantauan:') !!}
    {!! Form::date('tgl_pemantauan', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Suhu More 38 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_suhu_more_38', 'Is Suhu More 38:') !!}
    {!! Form::text('is_suhu_more_38', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Drainase Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_drainase', 'Is Drainase:') !!}
    {!! Form::text('is_drainase', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Pus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_pus', 'Is Pus:') !!}
    {!! Form::text('is_pus', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Perforasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_perforasi', 'Is Perforasi:') !!}
    {!! Form::text('is_perforasi', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Fistula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_fistula', 'Is Fistula:') !!}
    {!! Form::text('is_fistula', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Ilo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_ilo', 'Is Ilo:') !!}
    {!! Form::text('is_ilo', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! Form::date('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! Form::date('updated_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Deleted At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    {!! Form::text('deleted_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Vuser Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vuser', 'Vuser:') !!}
    {!! Form::text('vuser', null, ['class' => 'form-control']) !!}
</div>
*/ ?>

  <div class="col-md-12">
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">Data Pasien</a></li>
        <li><a href="#tab_2" data-toggle="tab">Data Kultur</a></li>
        <li><a href="#tab_3" data-toggle="tab">Data Pemantauan</a></li>
        <li><a href="#tab_4" data-toggle="tab">Antibiotik</a></li>
        <li><a href="#tab_5" data-toggle="tab">Kesimpulan</a></li>
        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
          <div class="row">
            <div class="col-md-6">
            {!! Form::hidden('no_transaksi',null, ['class' => 'form-control','id'=>'no_transaksi']) !!}
            <div class="form-group col-sm-12">
                {!! Form::label('id_pasien', 'No Rekam Medis:') !!}
                {!! Form::text('id_pasien',isset($dt) ? $dt->id_pasien : null, ['class' => 'form-control','id'=>'id_pasien']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('id_registrasi', 'No Pendaftaran:') !!}
                {!! Form::text('id_registrasi', null, ['class' => 'form-control','id'=>'id_registrasi']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('tgl_lahir', 'Tanggal Lahir:') !!}
                {!! Form::text('tgl_lahir',isset($dt) ? $dt->tgl_lhr : null, ['class' => 'form-control','id'=>'tgl_lahir']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('umur', 'Umur (Tahun):') !!}
                {!! Form::text('umur', isset($dt) ? $dt->umur : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('jns_kelamin', 'Jenis Kelamin:') !!}
                {!! Form::text('jns_kelamin',isset($dt) ? $dt->jns_kelamin : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('tb', 'Tinggi Badan:') !!}
                {!! Form::text('tb', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('bb', 'Berat Badan:') !!}
                {!! Form::text('bb', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('cara_masuk', 'Cara Masuk:') !!}
                {!! Form::text('cara_masuk',isset($dt) ? $dt->cara_masuk : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('dpjp', 'DPJP:') !!}
                {!! Form::text('dpjp',isset($dt) ? $dt->dpjp : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('raber', 'Raber dengan:') !!}
                {!! Form::text('raber',isset($dt) ? $dt->raber : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('dx_akhir', 'Diagnosa Akhir:') !!}
                {!! Form::text('dx_akhir',isset($dt) ? $dt->dx_akhir : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('ruang_rawat', 'Ruang Rawat:') !!}
                <table class="table" style="border: solid; border-width: 1px;">
                  <thead>
                    <tr>
                      <td>Ruang</td>
                      <td>Tgl.Masuk</td>
                      <td>Tgl.Keluar</td>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            </div>
          </div><!-- end col 1 -->
          <div class="col-md-6">
            <div class="form-group col-sm-12">
                {!! Form::label('faktor_resiko', 'Faktor Resiko:') !!}
                {!! Form::text('faktor_resiko',isset($dt) ? $dt->faktor_resiko : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('operasi', 'Operasi:') !!}
                {!! Form::text('operasi',isset($dt) ? $dt->operasi : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('emergensi', 'Emergensi:') !!}
                {!! Form::text('emergensi',isset($dt) ? $dt->emergensi : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('tgl_operasi', 'Tanggal Operasi:') !!}
                {!! Form::text('tgl_operasi',isset($dt) ? $dt->tgl_operasi : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('dr_operator', 'Dokter Operator:') !!}
                {!! Form::text('dr_operator',isset($dt) ? $dt->dr_operator : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('tindakan_operasi', 'Tindakan Operasi:') !!}
                {!! Form::text('tindakan_operasi',isset($dt) ? $dt->tindakan_operasi : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('jns_operasi', 'Jenis Operasi:') !!}
                {!! Form::text('jns_operasi',isset($dt) ? $dt->jns_operasi : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('anastesi', 'Anastesi Umum:') !!}
                {!! Form::text('anastesi',isset($dt) ? $dt->anastesi : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('kamar_operasi', 'Kamar Operasi:') !!}
                {!! Form::text('kamar_operasi',isset($dt) ? $dt->kamar_operasi : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('ronde_ke', 'Ronde Ke:') !!}
                {!! Form::text('ronde_ke',isset($dt) ? $dt->ronde_ke : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('lama_operasi', 'Lama Operasi:') !!}
                {!! Form::text('lama_operasi',isset($dt) ? $dt->lama_operasi : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('asa_score', 'ASA Score:') !!}
                {!! Form::text('asa_score',isset($dt) ? $dt->asa_score : null, ['class' => 'form-control']) !!}
            </div>
          </div><!-- end col 2 -->
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group col-sm-12">
                  {!! Form::label('is_kultur', 'Kultur?:') !!}
                  {!! Form::select('is_kultur',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('tgl_kultur', 'Tanggal Periksa:') !!}
                  {!! Form::text('tgl_kultur', null, ['class' => 'form-control myTgl']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('hasil_kultur', 'Hasil:') !!}
                  {!! Form::textarea('hasil_kultur', null, ['class' => 'form-control']) !!}
              </div>
            </div>
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_3">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group col-sm-12">
                  {!! Form::label('tgl_pemantauan', 'Tanggal Pemantauan:') !!}
                  {!! Form::text('tgl_pemantauan', null, ['class' => 'form-control myTgl']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_suhu_more_38', 'Suhu > 38:') !!} &#8451
                  {!! Form::select('is_suhu_more_38',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_drainase', 'Drainase:') !!}
                  {!! Form::select('is_drainase',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_pus', 'Pus:') !!}
                  {!! Form::select('is_pus',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_perforasi', 'Perforasi:') !!}
                  {!! Form::select('is_perforasi',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_fistula', 'Fistula:') !!}
                  {!! Form::select('is_fistula',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
            </div>
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_4">
          <div class="row">
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <td>Nama Obat</td>
                    <td>Tgl.Awal</td>
                    <td>Tgl.Akhir</td>
                    <td>Dosis</td>
                    <td>PO/IV/IM</td>
                    <td>Pengobatan</td>
                    <td>Profilaksis</td>
                  </tr>
                </thead>
                <tbody id="gridAntibiotik">
                </tbody>
              </table>
              <input type="button" class="btn btn-default" id="add_row_antibiotik" name="add_row_antibiotik" value="Tambah Antibiotik">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab_5">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group col-sm-12">
                  {!! Form::label('is_ilo', 'ILO?:') !!}
                  {!! Form::select('is_ilo',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('keterangan', 'Keterangan:') !!}
                  {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
              </div>
              <!-- Submit Field -->
              <div class="form-group col-sm-12">
                  {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                  <a href="{!! route('pemantauanIloRis.index') !!}" class="btn btn-default">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- nav-tabs-custom -->
  </div>
  <!-- /.col -->
