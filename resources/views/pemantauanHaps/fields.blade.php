<div class="col-md-12">
  <!-- Custom Tabs -->
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_1" data-toggle="tab">Data Pasien</a></li>
      <li><a href="#tab_2" data-toggle="tab">Data Tindakan Pencegahan</a></li>
      <li><a href="#tab_3" data-toggle="tab">Data Pemantauan</a></li>
      <li><a href="#tab_4" data-toggle="tab">Kesimpulan</a></li>
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
        </div><!-- end col 2 -->
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="tab_2">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-12">
                {!! Form::label('tgl_pencegahan', 'Tanggal Tindakan:') !!}
                {!! Form::text('tgl_pencegahan', null, ['class' => 'form-control myTgl']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_oral_hygiene', 'Oral hygiene (2x/hari):') !!}
                {!! Form::select('is_oral_hygiene',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_suction', 'Suction intermitten:') !!}
                {!! Form::select('is_suction',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_fisioterapi_dada', 'Fisioterapi dada (2x/hari):') !!}
                {!! Form::select('is_fisioterapi_dada',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
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
                {!! Form::label('suara_nafas', 'Suara Napas:') !!}
                {!! Form::select('suara_nafas',['Vesikuler'=>'Vesikuler','Wheezing'=>'Wheezing','Ronchi'=>'Ronchi','Cracles'=>'Cracles','Tidak dinilai'=>'Tidak dinilai'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('rontgen', 'Rontgen:') !!}
                {!! Form::select('rontgen',['Pneumonia'=>'Pneumonia','Tidak pneunomonia'=>'Tidak pneunomonia','Tidak dilakukan'=>'Tidak dilakukan'], null, ['class' => 'form-control']) !!}
            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="tab_4">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-12">
                {!! Form::label('is_pnemunomia_hap', 'Pneumonia HAP?:') !!}
                {!! Form::select('is_pnemunomia_hap',['Ya'=>'Ya','Tidak'=>'Tidak'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('keterangan', 'Keterangan:') !!}
                {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Submit Field -->
            <div class="form-group col-sm-12">
                {!! Form::submit('Save', ['id'=>'simpan-ventilator','class' => 'btn btn-primary']) !!}
                <a href="{!! route('pemantauanHaps.index') !!}" class="btn btn-default">Cancel</a>
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
