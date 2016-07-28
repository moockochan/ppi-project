@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">DATA PEMANTAUAN ILO RJ</h1>

    </section>
    <!-- Modal -->
    <div class="modal modal-60 fade" id="add_observasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Pencarian Pasien</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-4">
                {!! Form::text('cari_nama',null,['id'=>'cari_nama','class'=>'form-control','placeholder'=>'Nama Pasien']) !!}
              </div>
              <div class="col-sm-2">
                {!! Form::text('cari_id_pasien',null,['id'=>'cari_id_pasien','class'=>'form-control','placeholder'=>'No RM']) !!}
              </div>
              <div class="col-sm-2">
                {!! Form::text('cari_id_registrasi',null,['id'=>'cari_id_registrasi','class'=>'form-control','placeholder'=>'No Pendaftaran']) !!}
              </div>
              <div class="col-sm-2">
                {!! Form::text('cari_tgl_registrasi',null,['id'=>'cari_tgl_registrasi','class'=>'form-control myTgl','placeholder'=>'Tgl Daftar']) !!}
              </div>
              <div class="col-sm-2">
                <input type="button" class="btn btn-default" value="Cari" id="ilorj-cariPasienBedah">
              </div>
            </div>
            <div id="hasiPencarianPasien">
              @include('pemantauanIloRjs.data_pasien_bedah')
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
              <!-- Button trigger modal -->
              <button type="button" id="show_add_observasi" class="btn btn-default" data-toggle="modal" data-target="#add_observasi">
                Input Pasien
              </button>
              <div class="box box-success">
                <div class="box-body">
                  <div class="row">
                    <div class="col-sm-2">
                      {!! Form::text('ilorj_cari_id_pasien',null,['id'=>'ilorj_cari_id_pasien','class'=>'form-control','placeholder'=>'No. RM']) !!}
                    </div>
                    <div class="col-sm-2">
                      {!! Form::text('ilorj_cari_id_registrasi',null,['id'=>'ilorj_cari_id_registrasi','class'=>'form-control','placeholder'=>'No Pendaftaran']) !!}
                    </div>
                    <div class="col-sm-2">
                      {!! Form::text('ilorj_cari_tgl_registrasi',null,['id'=>'ilorj_cari_tgl_registrasi','class'=>'form-control myTgl','placeholder'=>'Tgl Masuk RS']) !!}
                    </div>
                    <div class="col-sm-2">
                      {!! Form::text('ilorj_cari_tgl_obs',null,['id'=>'ilorj_cari_tgl_obs','class'=>'form-control myTgl','placeholder'=>'Tgl. Obs. Terakhir']) !!}
                    </div>
                    <div class="col-sm-2">
                      <input type="button" class="btn btn-default" value="Cari" id="cariDataIloRj">
                    </div>
                  </div>
                </div>
              </div>
              <div id="tbDataIloRJ">
                     @include('pemantauanIloRjs.table')
              </div>
            </div>
        </div>
    </div>
@endsection
