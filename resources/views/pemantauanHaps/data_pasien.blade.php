<table class="table" id="tbDataPasien">
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
          print "<td>".$dt->tgl_registrasi."</td>";
          print "<td><button class='add_to_observe' url='/hap/add-observe' no_transaksi='".$dt->no_transaksi."' id_registrasi='".$dt->id_registrasi."'>+</button></td>";
          print "</tr>";
        }
      }
    ?>
  </tbody>
</table>
