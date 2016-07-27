<?php //{!! $dataTable->table(['width' => '100%']) !!} ?>

<table id="tb-ilo-ri-observe" class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>No. RM</th>
      <th>No. Pendaftaran</th>
      <th>Nama Pasien</th>
      <th>Tgl. Masuk RS</th>
      <th>Tgl. Operasi</th>
      <th>Jenis Operasi</th>
      <th>Tgl. Observasi Terakhir</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if(!empty($tbindex)){
        $no=1;
        foreach ($tbindex as $key => $value) {
          # code...
          $id=$value->id;
          print("<tr>");
          print("<td>".$no."</td>");
          print("<td>".$value->id_pasien."</td>");
          print("<td>".$value->id_registrasi."</td>");
          print("<td>".$value->nm_pasien."</td>");
          print("<td>".$value->tgl_registrasi."</td>");
          print("<td>".$value->tgl_operasi."</td>");
          print("<td>".$value->jns_operasi."</td>");
          print("<td>".$value->tgl_transaksi."</td>");
          print("<td>");
          $no++;
          ?>
          {!! Form::open(['route' => ['pemantauanIloRis.destroy', $id], 'method' => 'delete']) !!}
          <div class='btn-group'>
              <a href="{{ route('pemantauanIloRis.show', $id) }}" class='btn btn-default btn-xs'>
                  <i class="glyphicon glyphicon-eye-open"></i>
              </a>
              <a href="{{ route('pemantauanIloRis.edit', $id) }}" class='btn btn-default btn-xs'>
                  <i class="glyphicon glyphicon-edit"></i>
              </a>
              {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
                  'type' => 'submit',
                  'class' => 'btn btn-danger btn-xs',
                  'onclick' => "return confirm('Are you sure?')"
              ]) !!}
          </div>
          {!! Form::close() !!}
          <?php
          print("</td>");
          print("</tr>");
        }
      }
    ?>
  </tbody>
</table>
@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="vendor/datatables/buttons.server-side.js"></script>
    <script src="{{ asset('/vendor/jquery.simplePagination.js') }}"></script>
    <script language="javascript">
      $("#tb-ilo-ri-observe").DataTable({
        bFilter: false
      });
    </script>
    <?php //{!! $dataTable->scripts() !!} ?>
@endsection
