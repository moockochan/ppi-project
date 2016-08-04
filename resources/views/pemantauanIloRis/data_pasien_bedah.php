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
  <tbody id="grid">
    <?php
      if(!empty($data)){
        foreach ($data as $dt) {
          # code...
          print "<tr class='liner'>";
          print "<td>".$dt->nm_pasien."</td>";
          print "<td>".$dt->id_pasien."</td>";
          print "<td>".$dt->id_registrasi."</td>";
          print "<td>".$dt->tgl_masuk_inap."</td>";
          print "<td><button class='add_to_observe' url='/ilori/add-observe' no_transaksi='".$dt->no_tran."' id_registrasi='".$dt->id_registrasi."'>+</button></td>";
          print "</tr>";
        }
      }
    ?>
  </tbody>
</table>
