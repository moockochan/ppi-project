@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">PemantauanIloRis</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('pemantauanIloRis.create') !!}">Add New</a>
        </h1>
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
                <input type="button" class="btn btn-default" value="Cari" id="cariPasienBedah">
              </div>
            </div>
            <div id="hasiPencarianPasien">
              @include('pemantauanIloRis.data_pasien_bedah')
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
              <button type="button" id="show_add_observasi" data-toggle="modal" data-target="#add_observasi">
                Input Pasien
              </button>
                     @include('pemantauanIloRis.table')
            </div>
        </div>
    </div>
@endsection