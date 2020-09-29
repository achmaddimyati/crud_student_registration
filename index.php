<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Page</title>
  </head>
  <body>
    <header>
      <h3>Menu Pendaftaran</h3>
    </header>
    <nav>
      <ul type="square">
        <li><a href="add.php">Tambah Siswa</a></li>
        <li><a href="list.php">List Siswa</li>
      </ul>
    </nav>
    <?php if (isset($_GET['stats'])): ?>
      <?php if ($_GET['stats']=='success') {
        echo "Berhasil Register";
      }else {
        echo "Gagal ya!";
      } ?>

    <?php endif; ?>

  </body>
</html>
