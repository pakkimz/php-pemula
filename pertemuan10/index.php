<?php

require('functions.php');
// ambil data dari tabel mahasiswa / query data mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html>

  <head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" type="text/css" href="..\style.css" />
  </head>

  <body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <table cellspacing="0" border="1" cellpadding="10">
      <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
      </tr>

      <?php $i = 1; ?>
      <?php foreach($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="">ubah</a> |
          <a href="hapus.php?id=<?php echo $mhs["id"] ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
        <td><img src="..\..\..\img\all\<?php echo $mhs["gambar"]; ?>" width="50" /></td>
        <td><?php echo $mhs["nrp"]; ?></td>
        <td><?php echo $mhs["nama"]; ?></td>
        <td><?php echo $mhs["email"]; ?></td>
        <td><?php echo $mhs["jurusan"]; ?></td>
      </tr>
      <?php $i++ ?>
      <?php endforeach; ?>
    </table>
  </body>

</html>
