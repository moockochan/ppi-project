<div class="col-md-12">
  <!-- Custom Tabs -->
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_1" data-toggle="tab">Data Pasien</a></li>
      <li><a href="#tab_2" data-toggle="tab">Data Indikasi</a></li>
      <li><a href="#tab_3" data-toggle="tab">Data Pemantauan</a></li>
      <li><a href="#tab_4" data-toggle="tab">Data Assesment</a></li>
      <li><a href="#tab_5" data-toggle="tab">Data Periksa Urine</a></li>
      <li><a href="#tab_6" data-toggle="tab">Data Biakan Urine</a></li>
      <li><a href="#tab_7" data-toggle="tab">Kesimpulan</a></li>
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
              {!! Form::label('bb', 'Berat Badan:') !!}
              {!! Form::text('bb', 0, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-12">
              {!! Form::label('tb', 'Tinggi Badan:') !!}
              {!! Form::text('tb', 0, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-12">
              {!! Form::label('cara_masuk', 'Cara Masuk RS:') !!}
              {!! Form::text('cara_masuk',isset($dt) ? $dt->cara_masuk : null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-12">
              {!! Form::label('cara_keluar', 'Cara Keluar RS:') !!}
              {!! Form::text('cara_keluar',isset($dt) ? $dt->cara_keluar : null, ['class' => 'form-control']) !!}
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
              {!! Form::label('is_faktor_resiko', 'Faktor Resiko:') !!}
              {!! Form::select('is_faktor_resiko',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
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
              {!! Form::label('hari_pemasangan', 'Pemasangan Kateter (Hari):') !!}
              {!! Form::text('hari_pemasangan', null, ['class' => 'form-control']) !!}
          </div>
        </div><!-- end col 2 -->
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="tab_2">
        <div class="row">
          <div class="col-md-6">
            <div class="col-sm-12"><h4>Indikasi</h4></div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_revisi_urine', 'Revisi Urine:') !!}
                {!! Form::checkbox('is_revisi_urine', 1,null) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_pasien_terminal', 'Pasien Terminal:') !!}
                {!! Form::checkbox('is_pasien_terminal', 1,null) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_balance_cairan', 'Balance Cairan:') !!}
                {!! Form::checkbox('is_balance_cairan', 1,null) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_program_operasi', 'Program Operasi:') !!}
                {!! Form::checkbox('is_program_operasi', 1,null) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_immobilisasi', 'Immobilisasi:') !!}
                {!! Form::checkbox('is_immobilisasi', 1,null) !!}
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-sm-12"><h4>Teknik Pemasangan</h4></div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_teknis_steril', 'Teknik Steril:') !!}
                {!! Form::select('is_teknis_steril',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_hand_hygiene', 'Hand hygiene:') !!}
                {!! Form::select('is_hand_hygiene',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_disinfeksi', 'Disinfeksi:') !!}
                {!! Form::select('is_disinfeksi',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
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
                {!! Form::label('is_aliran_lancar', 'Aliran lancar:') !!}
                {!! Form::select('is_aliran_lancar',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_selang_bersih', 'Selang bersing:') !!}
                {!! Form::select('is_selang_bersih',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_closed', 'Close sistem terjaga:') !!}
                {!! Form::select('is_closed',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_pengosongan_urine', 'Pengosongan urine bag sebelum penuh:') !!}
                {!! Form::select('is_pengosongan_urine',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_urine_bag_menggantung', 'Urine bag menggantung (tidak dilantai):') !!}
                {!! Form::select('is_urine_bag_menggantung',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_perineal', 'Perineal hygiene:') !!}
                {!! Form::select('is_perineal',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_urine_bag_rendah', 'Urine bag lebih rendah dari bladder:') !!}
                {!! Form::select('is_urine_bag_rendah',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
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
                {!! Form::label('is_suhu_more_38', 'Suhu > 38:') !!}
                {!! Form::select('is_suhu_more_38',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_nyeri', 'Nyeri supra pubic:') !!}
                {!! Form::select('is_nyeri',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_pus', 'Terdapat pus:') !!}
                {!! Form::select('is_pus',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_leukosit_urine', 'Leukosit urine:') !!}
                {!! Form::select('is_leukosit_urine',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="tab_5">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-12">
                {!! Form::label('is_pemeriksaan_urine', 'Pemeriksaan Urine?:') !!}
                {!! Form::select('is_pemeriksaan_urine',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('tgl_urine', 'Tanggal Periksa:') !!}
                {!! Form::text('tgl_urine', null, ['class' => 'form-control myTgl']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('hasil_urine', 'Hasil:') !!}
                {!! Form::textarea('hasil_urine', null, ['class' => 'form-control']) !!}
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="tab_6">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-12">
                {!! Form::label('is_biakan', 'Biakan Urine?:') !!}
                {!! Form::select('is_biakan',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('tgl_biakan', 'Tanggal Periksa:') !!}
                {!! Form::text('tgl_biakan', null, ['class' => 'form-control myTgl']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('hasil_biakan', 'Hasil:') !!}
                {!! Form::textarea('hasil_biakan', null, ['class' => 'form-control']) !!}
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="tab_7">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-12">
                {!! Form::label('is_isk', 'ISK?:') !!}
                {!! Form::select('is_isk',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
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
