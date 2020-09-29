<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Register</title>
  </head>
  <body>
    <header>
      <h3>Pendaftaran Siswa Baru</h3>
    </header>
    <form class="#" action="add_.php" method="post">
      <fieldset>
        <legend>Formulir Daftar</legend>
        <table>
          <tr>
            <td><label for="nama">Nama Siswa</label></td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="nama siswa..."></td>
          </tr>
          <tr>
            <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
            <td>:</td>
            <td>
              <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki
              <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
            </td>
          </tr>
          <tr>
            <td><label for="alamat">Alamat Lengkap</label></td>
            <td>:</td>
            <td><textarea name="alamat" placeholder="alamat siswa ..."></textarea></td>
          </tr>
          <tr>
            <td><label for="agama">Agama</label></td>
            <td>:</td>
            <td>
              <select class="#" name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="katholik">Katholik</option>
                <option value="hindhu">Hindhu</option>
                <option value="budha">Budha</option>
                <option value="konghucu">Konghucu</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="sekolah_asal">Asal Sekolah</label></td>
            <td>:</td>
            <td><input type="text" name="sekolah_asal" placeholder="sekolah asal siswa..."></td>
          </tr>
          <tr>
            <td><input type="submit" name='daftar' value="Daftar Sekarang"</td>
          </tr>
        </table>
      </fieldset>

    </form>
  </body>
</html>
