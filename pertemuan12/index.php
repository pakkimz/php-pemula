<?php

require('functions.php');
// ambil data dari tabel mahasiswa / query data mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");
/* $mahasiswa = query("SELECT * FROM mahasiswa"); */

// tombol cari ditekan
if (isset($_POST["cari"])) {
  $mahasiswa = cari($_POST["keyword"]);
}

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

    <form action="" method="post">
      <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
      <button type="submit" name="cari">Cari</button>
    </form>
    <br>

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
          <a href="ubah.php?id=<?php echo $mhs["id"] ?>">ubah</a> |
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
