<?php
include 'config.php';

if(isset($_POST['daftar'])){
  $nama=$_POST['nama'];
  $jk=$_POST['jenis_kelamin'];
  $alamat=$_POST['alamat'];
  $agama=$_POST['agama'];
  $sekolah=$_POST['sekolah_asal'];

  $sql="INSERT INTO calon_siswa VALUES('','$nama','$jk','$alamat','$agama','$sekolah')";
  $query=mysqli_query($koneksi,$sql);
  if($query){
    header('Location:index.php?stats=success');
  }else {
    header('Location:index.php?stats=failure');
  }
}else {
  die("akses ditolak");
}


?>
