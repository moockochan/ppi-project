<div class="col-md-12">
  <!-- Custom Tabs -->
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_1" data-toggle="tab">Data Pasien</a></li>
      <li><a href="#tab_2" data-toggle="tab">Data Pemantauan</a></li>
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
              {!! Form::label('dx_akhir', 'Diagnosa Akhir:') !!}
              {!! Form::text('dx_akhir',isset($dt) ? $dt->dx_akhir : null, ['class' => 'form-control']) !!}
          </div>
          </div><!-- end col 1 -->
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="tab_2">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group col-sm-12">
                {!! Form::label('tgl_pemantauan','Tanggal Kontrol:') !!}
                {!! Form::text('tgl_pemantauan',null,['class'=>'form-control myTgl']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('kd_pemeriksa','Dokter Pemeriksa:') !!}
                {!! Form::select('kd_pemeriksa',DB::table('tb_mt_pemeriksa')->lists('nm_pemeriksa','kd_pemeriksa'),null,['class'=>'form-control select2',"style"=>"width:100%;"]) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_suhu_more_38', 'Suhu > 38:') !!}&#8451
                {!! Form::select('is_suhu_more_38',['Ya'=>'Ya','Tidak'=>'Tidak'],null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_tanda_peradangan','Tanda Peradangan:') !!}
                {!! Form::select('is_tanda_peradangan',['Ya'=>'Ya','Tidak'=>'Tidak'],null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_pus','Pus:') !!}
                {!! Form::select('is_pus',['Ya'=>'Ya','Tidak'=>'Tidak'],null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('is_perforasi','Perforasi:') !!}
                {!! Form::select('is_perforasi',['Ya'=>'Ya','Tidak'=>'Tidak'],null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('antibiotik','Antibiotik:') !!}
                {!! Form::select('antibiotik[]', DB::table("tbl_master_obat")->lists("nmobat","kdobat"),null,['class'=>'form-control select2','multiple',"style"=>"width:100%;"]) !!}
            </div>
            <!-- Submit Field -->
            <div class="form-group col-sm-12">
              {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
              <a href="{!! route('pemantauanIloRjs.index') !!}" class="btn btn-default">Cancel</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
  </div>
  <!-- nav-tabs-custom -->
</div>
<!-- /.col -->
