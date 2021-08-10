<?php

/* $_GET["nama"] = "Sandhika Galih"; */
/* $_GET["nrp"] = "043040023"; */
/* var_dump($_GET); */

$mahasiswa = [
  [
    "nrp" => "043040023",
    "nama" => "Sandhika Galih",
    "email" => "sandhikagalih@unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "0.jpg"
  ],
  [
    "nrp" => "033040001",
    "nama" => "Doddy Ferdiansyah",
    "email" => "doddy@gmail.com",
    "jurusan" => "Teknik Industri",
    "gambar" => "3.jpg"
  ]
]

?>

<!DOCTYPE html>
<html>
  <head>
    <title>GET</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <h1>Daftar mahasiswa</h1>
    <ul>
      <?php foreach($mahasiswa as $mhs) : ?>
      <li>
        <a href="latihan2.php?gambar=<?= $mhs["gambar"]; ?>&nama=<?= $mhs["nama"];?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"]; ?></a>
      </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
