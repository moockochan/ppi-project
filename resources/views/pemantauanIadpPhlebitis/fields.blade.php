<div class="col-md-12">
  <!-- Custom Tabs -->
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_1" data-toggle="tab">Data Pasien</a></li>
      <li><a href="#tab_2" data-toggle="tab">Data Indikasi</a></li>
      <li><a href="#tab_3" data-toggle="tab">Data Pemantauan</a></li>
      <li><a href="#tab_4" data-toggle="tab">Data Assesment</a></li>
      <li><a href="#tab_5" data-toggle="tab">Data Tujuan Pemasangan</a></li>
      <li><a href="#tab_6" data-toggle="tab">Data Kultur Darah</a></li>
      <li><a href="#tab_7" data-toggle="tab">Data Kultur Pus</a></li>
      <li><a href="#tab_8" data-toggle="tab">Kesimpulan</a></li>
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
              {!! Form::label('cara_keluar', 'Cara Keluar RS:') !!}
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
              {!! Form::label('is_pemasangan_kateter_v', 'Pemasangan Kateter V Perifer:') !!}
              {!! Form::select('is_pemasangan_kateter_v',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-12">
              {!! Form::label('tgl_pasang', 'Tanggal Pasang:') !!}
              {!! Form::text('tgl_pasang', null, ['class' => 'form-control myTgl']) !!}
          </div>
          <div class="form-group col-sm-12">
              {!! Form::label('tgl_lepas', 'Tanggal Lepas:') !!}
              {!! Form::text('tgl_lepas', null, ['class' => 'form-control myTgl']) !!}
          </div>
          <div class="form-group col-sm-12">
              {!! Form::label('hari_pemasangan', 'Pemasangan IV Line (Hari):') !!}
              {!! Form::text('hari_pemasangan', null, ['class' => 'form-control','readonly'=>'readonly']) !!}
          </div>
        </div><!-- end col 2 -->
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="tab_2">
        <div class="row">
          <div class="col-md-6">
            <div class="col-sm-12"><h4>Teknik Pemasangan</h4></div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_hand_hygiene', 'Hand hygiene:') !!}
                {!! Form::select('is_hand_hygiene',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_teknis_steril', 'Teknik Steril:') !!}
                {!! Form::select('is_teknis_steril',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_disinfeksi', 'Disinfeksi:') !!}
                {!! Form::select('is_disinfeksi',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_iv_line_16_26', 'Ukuran IV Line 16-26:') !!}
                {!! Form::select('is_iv_line_16_26',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_adp', 'ADP:') !!}
                {!! Form::select('is_adp',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-pane -->
      <!-- /.tab-pane -->
      <div class="tab-pane" id="tab_3">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-12">
                {!! Form::label('tgl_pemantauan', 'Tanggal Pemantauan:') !!}
                {!! Form::text('tgl_pemantauan', null, ['class' => 'form-control myTgl']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_hand_hygiene_pre_inj', 'Hand hygiene pre injection:') !!}
                {!! Form::select('is_hand_hygiene_pre_inj',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_alkohol_pre_inj', 'Alkohol pre injection:') !!}
                {!! Form::select('is_alkohol_pre_inj',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_fixatic', 'Fixatic terturup:') !!}
                {!! Form::select('is_fixatic',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_dresing', 'Dresing bersih:') !!}
                {!! Form::select('is_dresing',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_selang_bersih', 'Selang infuset bersih:') !!}
                {!! Form::select('is_selang_bersih',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_lemak_protein_darah', 'Lemak, protein, darah pada selang:') !!}
                {!! Form::select('is_lemak_protein_darah',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="tab_4">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-12">
                {!! Form::label('tgl_assesment', 'Tanggal Assesment:') !!}
                {!! Form::text('tgl_assesment', null, ['class' => 'form-control myTgl']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_kemerahan', 'Kemerahan:') !!}
                {!! Form::select('is_kemerahan',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_edema_lokal', 'Edema lokal:') !!}
                {!! Form::select('is_edema_lokal',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_nyeri_lokal', 'Nyeri lokal:') !!}
                {!! Form::select('is_nyeri_lokal',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_demam', 'Demam sistemik > 38:') !!}
                {!! Form::select('is_demam',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="tab_5">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-12">
                {!! Form::label('is_antibiotik', 'Pemberian : Antibiotik/Sitostatika') !!}
                {!! Form::checkbox('is_antibiotik', true, null) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_wb', 'WB/PRC/FFP Trombosit') !!}
                {!! Form::checkbox('is_wb', true, null) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_protein', 'Protein/Lemak/Glukosa') !!}
                {!! Form::checkbox('is_protein', true, null) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_rl', 'RL/NaCL 0.9%/KaEn 3B') !!}
                {!! Form::checkbox('is_rl', true, null) !!}
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="tab_6">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-12">
                {!! Form::label('is_kultur_darah', 'Kultur Darah?:') !!}
                {!! Form::select('is_kultur_darah',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('tgl_kultur_darah', 'Tanggal Periksa:') !!}
                {!! Form::text('tgl_kultur_darah', null, ['class' => 'form-control myTgl']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('hasil_kultur_darah', 'Hasil:') !!}
                {!! Form::textarea('hasil_kultur_darah', null, ['class' => 'form-control']) !!}
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="tab_7">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-12">
                {!! Form::label('is_kultur_pus', 'Kultur Pus?:') !!}
                {!! Form::select('is_kultur_pus',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('tgl_kultur_pus', 'Tanggal Periksa:') !!}
                {!! Form::text('tgl_kultur_pus', null, ['class' => 'form-control myTgl']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('hasil_kultur_pus', 'Hasil:') !!}
                {!! Form::textarea('hasil_kultur_pus', null, ['class' => 'form-control']) !!}
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="tab_8">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-12">
                {!! Form::label('is_phlebitis', 'Phlebitis?:') !!}
                {!! Form::select('is_phlebitis',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('keterangan', 'Keterangan:') !!}
                {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Submit Field -->
            <div class="form-group col-sm-12">
                {!! Form::submit('Save', ['id'=>'simpan-ventilator','class' => 'btn btn-primary']) !!}
                <a href="{!! route('pemantauanIadpPhlebitis.index') !!}" class="btn btn-default">Cancel</a>
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
