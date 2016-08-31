@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">PEMANTAUAN DECUBITUS PASIEN BED REST</h1>

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
                <input type="button" class="btn btn-default" value="Cari" url="/decubitus/cari-pasien" id="CariPasien">

              </div>
            </div>

            <div id="hasiPencarianPasien">
              @include('pemantauanDecubituses.data_pasien')
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
        <div class="box box-primary box-solid">
            <div class="box-body">

              <div class="box box-primary box-solid">
                <div class="box-header">
                  <!-- Button trigger modal -->
                  <button type="button" id="show_add_observasi" class="btn btn-default" data-toggle="modal" data-target="#add_observasi">
                    <i class="fa fa-plus"></i> Input Pasien
                  </button>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-sm-2">
                      {!! Form::text('dt_cari_id_pasien',null,['id'=>'dt_cari_id_pasien','class'=>'form-control','placeholder'=>'No. RM']) !!}
                    </div>
                    <div class="col-sm-2">
                      {!! Form::text('dt_cari_id_registrasi',null,['id'=>'dt_cari_id_registrasi','class'=>'form-control','placeholder'=>'No Pendaftaran']) !!}
                    </div>
                    <div class="col-sm-2">
                      {!! Form::text('dt_cari_tgl_registrasi',null,['id'=>'dt_cari_tgl_registrasi','class'=>'form-control myTgl','placeholder'=>'Tgl Masuk RS']) !!}
                    </div>
                    <div class="col-sm-2">
                      {!! Form::text('dt_cari_tgl_obs',null,['id'=>'dt_cari_tgl_obs','class'=>'form-control myTgl','placeholder'=>'Tgl. Obs. Terakhir']) !!}
                    </div>
                    <div class="col-sm-2">
                      <input type="button" class="btn btn-default" value="Cari" url="/decubitus/cari-data-observe" id="cariDataObs">
                    </div>
                  </div>
                </div>
              </div>
              <div id="tbData">
                @include('pemantauanDecubituses.table')
              </div>
            </div>
        </div>
    </div>
@endsection
