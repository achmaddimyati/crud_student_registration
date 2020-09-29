<?php
include 'config.php';

if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql="SELECT * FROM calon_siswa WHERE id=$id";
  $query=mysqli_query($koneksi,$sql);
  $s=mysqli_fetch_assoc($query);
}else {
  die("gagal akses");
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Halaman Edit</title>
   </head>
   <body>
     <header>
       <h3>Perubahan Biodata Siswa Baru</h3>
     </header>
     <form class="#" action="edit_.php" method="post">
       <fieldset>
         <legend>Formulir Edit</legend>
         <table>
           <tr>
             <td><input type="hidden" name="id" value="<?php echo $s['id']; ?>"</td>
           </tr>
           <tr>
             <td><label for="nama">Nama Siswa</label></td>
             <td>:</td>
             <td><input type="text" name="nama" value="<?php echo $s['nama']; ?>"></td>
           </tr>
           <tr>
             <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
             <td>:</td>
             <?php $jk=$s['jenis_kelamin'] ?>
             <td>
               <input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk=='laki-laki')?"checked":""; ?>>Laki-laki
               <input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk=='perempuan')?"checked":""; ?>>Perempuan
             </td>
           </tr>
           <tr>
             <td><label for="alamat">Alamat Lengkap</label></td>
             <td>:</td>
             <td><textarea name="alamat" placeholder="alamat siswa ..."><?php echo $s['alamat'];  ?></textarea></td>
           </tr>
           <tr>
             <td><label for="agama">Agama</label></td>
             <td>:</td>
             <?php $ag=$s['agama'] ?>
             <td>
               <select class="#" name="agama">
                 <option value="islam" <?php echo ($ag=='islam')?"selected":""; ?>>Islam</option>
                 <option value="kristen" <?php echo ($ag=='kristen')?"selected":""; ?>>Kristen</option>
                 <option value="katholik" <?php echo ($ag=='katholik')?"selected":""; ?>>Katholik</option>
                 <option value="hindhu" <?php echo ($ag=='hindhu')?"selected":""; ?>>Hindhu</option>
                 <option value="budha" <?php echo ($ag=='budha')?"selected":""; ?>>Budha</option>
                 <option value="konghucu" <?php echo ($ag=='konghucu')?"selected":""; ?>>Konghucu</option>
               </select>
             </td>
           </tr>
           <tr>
             <td><label for="sekolah_asal">Asal Sekolah</label></td>
             <td>:</td>
             <td><input type="text" name="sekolah_asal" value="<?php echo $s['sekolah_asal']; ?>"></td>
           </tr>
           <tr>
             <td><input type="submit" name='sempan' value="Sempan Sekarang"</td>
           </tr>
         </table>
       </fieldset>

     </form>

   </body>
 </html>
