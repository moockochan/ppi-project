  <div class="col-md-12">
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">Data Pasien</a></li>
        <li><a href="#tab_2" data-toggle="tab">Data Pemantauan</a></li>
        <li><a href="#tab_3" data-toggle="tab">Data Assesment</a></li>
        <li><a href="#tab_4" data-toggle="tab">Data Kultur</a></li>
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
                {!! Form::text('id_pasien',isset($dt) ? $dt->id_pasien : null, ['class' => 'form-control','id'=>'id_pasien','readonly'=>'readonly']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('id_registrasi', 'No Pendaftaran:') !!}
                {!! Form::text('id_registrasi', null, ['class' => 'form-control','id'=>'id_registrasi','readonly'=>'readonly']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('tgl_lahir', 'Tanggal Lahir:') !!}
                {!! Form::text('tgl_lahir',isset($dt) ? $dt->tgl_lhr : null, ['class' => 'form-control','id'=>'tgl_lahir','readonly'=>'readonly']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('umur', 'Umur (Tahun):') !!}
                {!! Form::text('umur', isset($dt) ? $dt->umur : null, ['class' => 'form-control','readonly'=>'readonly']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('jns_kelamin', 'Jenis Kelamin:') !!}
                {!! Form::text('jns_kelamin',isset($dt) ? $dt->jns_kelamin : null, ['class' => 'form-control','readonly'=>'readonly']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('bb', 'Berat Badan:') !!}
                {!! Form::text('bb', 0, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('tb', 'Tinggi Badan:') !!}
                {!! Form::text('tb', 0, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('cara_masuk', 'Cara Masuk RS:') !!}
                {!! Form::text('cara_masuk',isset($dt) ? $dt->cara_masuk : null, ['class' => 'form-control','readonly'=>'readonly']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('cara_keluar', 'Cara Masuk RS:') !!}
                {!! Form::text('cara_keluar',isset($dt) ? $dt->cara_keluar : null, ['class' => 'form-control','readonly'=>'readonly']) !!}
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
                {!! Form::label('dpjp', 'DPJP:') !!}
                {!! Form::text('dpjp',isset($dt) ? $dt->dpjp : null, ['class' => 'form-control','readonly'=>'readonly']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('raber', 'Raber dengan:') !!}
                {!! Form::text('raber',isset($dt) ? $dt->raber : null, ['class' => 'form-control','readonly'=>'readonly']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('dx_akhir', 'Diagnosa Akhir:') !!}
                {!! Form::text('dx_akhir',isset($dt) ? $dt->dx_akhir : null, ['class' => 'form-control','readonly'=>'readonly']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_faktor_resiko', 'Faktor Resiko:') !!}
                {!! Form::select('is_faktor_resiko',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_ventilator', 'Ventilator:') !!}
                {!! Form::select('is_ventilator',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('no_ventilator', 'No. Ventilator:') !!}
                {!! Form::text('no_ventilator', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('tgl_pasang', 'Tanggal Pasang:') !!}
                {!! Form::text('tgl_pasang', null, ['class' => 'form-control myTgl']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('tgl_lepas', 'Tanggal Lepas:') !!}
                {!! Form::text('tgl_lepas', null, ['class' => 'form-control myTgl']) !!}
            </div>
          </div><!-- end col 2 -->
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group col-sm-12">
                  {!! Form::label('tgl_pemantauan', 'Tanggal Pemantauan:') !!}
                  {!! Form::text('tgl_pemantauan', null, ['class' => 'form-control myTgl']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_memantau_ett_cut_presure', 'Memantau ETT cuff pressure:') !!}
                  {!! Form::select('is_memantau_ett_cut_presure',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_eva_kepala_30_450', 'Evaluasi Kepala 30-450:') !!}
                  {!! Form::select('is_eva_kepala_30_450',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_oral_hygiene', 'Oral hygiene:') !!}
                  {!! Form::select('is_oral_hygiene',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_peptic_ulcer', 'Peptic ulcer prophylaxis:') !!}
                  {!! Form::select('is_peptic_ulcer',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_deep_urine', 'Deep urine thrombosis prophylaxis:') !!}
                  {!! Form::select('is_deep_urine',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_penggunaan_sedatif', 'Pengguanaan Sedatif:') !!}
                  {!! Form::select('is_penggunaan_sedatif',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
            </div>
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_3">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group col-sm-12">
                  {!! Form::label('tgl_assesment', 'Tanggal Assesment:') !!}
                  {!! Form::text('tgl_assesment', null, ['class' => 'form-control myTgl']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_penurunan_saturasi_o2', 'Penurunan Saturasi O2:') !!}
                  {!! Form::select('is_penurunan_saturasi_o2',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_temperatur_stabil', 'Temperatur Stabil:') !!}
                  {!! Form::select('is_temperatur_stabil',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_leukopenia', 'Leukopenia/ Leukcytosis:') !!}
                  {!! Form::select('is_leukopenia',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_sputum', 'Sputum purulence:') !!}
                  {!! Form::select('is_sputum',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_sekresi_meningkat', 'Sekresi respirator meningkat:') !!}
                  {!! Form::select('is_sekresi_meningkat',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_wheezing', 'Wheezing rales rhonchi:') !!}
                  {!! Form::select('is_wheezing',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_batuk', 'Batuk:') !!}
                  {!! Form::select('is_batuk',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('is_bradycardia', 'Bradycardia/ tachycardia:') !!}
                  {!! Form::select('is_bradycardia',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
            </div>
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_4">
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
        <div class="tab-pane" id="tab_5">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group col-sm-12">
                  {!! Form::label('is_pneumonia', 'Pneumonia?:') !!}
                  {!! Form::select('is_pneumonia',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group col-sm-12">
                  {!! Form::label('keterangan', 'Keterangan:') !!}
                  {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
              </div>
              <!-- Submit Field -->
              <div class="form-group col-sm-12">
                  {!! Form::submit('Save', ['id'=>'simpan-ventilator','class' => 'btn btn-primary']) !!}
                  <a href="{!! route('pemantauanVentilators.index') !!}" class="btn btn-default">Cancel</a>
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
