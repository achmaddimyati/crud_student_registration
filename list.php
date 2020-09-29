<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Biodata Page</title>
  </head>
  <body>
    <header>
      <h3>Menu Biodata</h3>
    </header>
    <p><a href="add.php">Tambah siswa disini...</a></p>
    <fieldset>
      <legend>Biodata Siswa</legend>
      <table border="2">
        <thead>
          <th>No.</th>
          <th>Nama Siswa</th>
          <th>Jenis Kelamin</th>
          <th>Alamat Lengkap</th>
          <th>Agama</th>
          <th>Asal Sekolah</th>
          <th>Aksi</th>
        </thead>
        <tbody>
          <?php
            $sql="SELECT * FROM calon_siswa";
            $query=mysqli_query($koneksi,$sql);
            while ($a = mysqli_fetch_array($query)) {
              echo "<tr>
                      <td>$a[id]</td>
                      <td>$a[nama]</td>
                      <td>$a[jenis_kelamin]</td>
                      <td>$a[alamat]</td>
                      <td>$a[agama]</td>
                      <td>$a[sekolah_asal]</td>
                      <td>
                        <a href='edit.php?id=$a[id]'>Edit |</a>
                        <a href='hapus.php?id=$a[id]'> Hapus</a>
                      </td>
                    </tr>";
            }

           ?>

        </tbody>
      </table>
      <?php echo "<br><hr>";
      echo "total siswa terdaftar sebanyak ". mysqli_num_rows($query)." orang<br>";
      if (isset($_GET['stats'])):
        if ($_GET['stats']=='success') {
          echo "Berhasil di sempan";
        }else {
          echo "Gagal ya kamu!";
        }
      endif;?>
    </fieldset>


  </body>
</html>
