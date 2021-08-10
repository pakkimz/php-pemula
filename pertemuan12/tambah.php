<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  /* var_dump($_POST); */

  // cek apakah data berhasil ditambahkan atau tidak
  /* var_dump(mysqli_affected_rows($conn)); */
  /* if (mysqli_affected_rows($conn) > 0) { */
  /*   echo "berhasil"; */
  /* } else { */
  /*   echo "gagal"; */
  /*   echo "<br>"; */
  /*   echo mysqli_error($conn); */
  /* } */
  if (tambah($_POST) > 0) {
    echo "
    <script>
      alert('data berhasil ditambahkan');
      document.location.href = 'index.php';
    </script>
  ";
  } else {
    echo "
    <script>
      alert('data gagal ditambahkan');
      document.location.href = 'index.php';
    </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="..\style.css" />
    <title>Tambah data mahasiswa</title>
  </head>

  <body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
      <ul>
        <li>
          <label for="nrp">NRP :</label>
          <input type="text" name="nrp" id="nrp" required>
        </li>
        <li>
          <label for="nama">Nama :</label>
          <input type="text" name="nama" id="nama" required>
        </li>
        <li>
          <label for="email">Email :</label>
          <input type="text" name="email" id="email" required>
        </li>
        <li>
          <label for="jurusan">Jurusan :</label>
          <input type="text" name="jurusan" id="jurusan" required>
        </li>
        <li>
          <label for="gambar">Gambar :</label>
          <input type="text" name="gambar" id="gambar" required>
        </li>
        <li>
          <button type="submit" name="submit">Tambah data</button>
        </li>
      </ul>
    </form>
  </body>
</html>
