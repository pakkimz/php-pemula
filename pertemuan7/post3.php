<!DOCTYPE html>
<html>
  <head>
    <title>POST</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>

    <?php if(isset($_POST["submit"])) : ?>
    <h1>Halo, Selamat datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>

    <!-- kalau action kosong halaman dikirim ke diri sendiri -->
    <form action="" method="post">
      Masukkan nama :
      <input type="text" name="nama"/>
      <button type="submit" name="submit">Kirim!</button>
    </form>
  </body>
</html>
