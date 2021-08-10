<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump($result);

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row();    // mengembalikan array numeric
// mysqli_fetch_assoc();  // mengembalikan array associative
// mysqli_fetch_array();  // mengembalikan keduanya
// mysqli_fetch_object();

// while ($mhs = mysqli_fetch_assoc($result)) {
//   var_dump($mhs["nama"]);
// }

?>
<!DOCTYPE html>
<html>

  <head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" type="text/css" href="..\style.css" />
  </head>

  <body>
    <h1>Daftar Mahasiswa</h1>

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
      <?php while($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="">ubah</a> |
          <a href="">hapus</a>
        </td>
        <td><img src="..\..\..\img\all\<?php echo $row["gambar"]; ?>" width="50" /></td>
        <td><?php echo $row["nrp"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["jurusan"]; ?></td>
      </tr>
      <?php $i++ ?>
      <?php endwhile; ?>
    </table>
  </body>

</html>
