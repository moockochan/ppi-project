<table class="table" id="tbPasienBedah">
  <thead>
    <tr>
      <td>Nama Pasien</td>
      <td>No Rekam Medis</td>
      <td>No Pendaftaran</td>
      <td>Tgl. Daftar</td>
      <td>Aksi</td>
    </tr>
  </thead>
  <tbody>
    <?php
      if(!empty($data)){
        foreach ($data as $dt) {
          # code...
          print "<tr>";
          print "<td>".$dt->nm_pasien."</td>";
          print "<td>".$dt->id_pasien."</td>";
          print "<td>".$dt->id_registrasi."</td>";
          print "<td>".$dt->tgl_masuk_inap."</td>";
          print "<td><button class='data_pasien_add'>+</button></td>";
          print "</tr>";
        }
      }
    ?>
  </tbody>
</table>
