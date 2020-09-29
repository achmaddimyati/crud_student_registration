<?php
include 'config.php';

if(isset($_POST['sempan'])){
  $id=$_POST['id'];
  $nama=$_POST['nama'];
  $jk=$_POST['jenis_kelamin'];
  $alamat=$_POST['alamat'];
  $agama=$_POST['agama'];
  $sekolah=$_POST['sekolah_asal'];

  $sql="UPDATE calon_siswa SET nama='$nama',jenis_kelamin='$jk',alamat='$alamat',agama='$agama',sekolah_asal='$sekolah' WHERE id=$id";
  $query=mysqli_query($koneksi,$sql);
  if($query){
    header('Location:list.php?stats=success');
  }else {
    header('Location:list.php?stats=failure');
  }
}else {
  die("akses ditolak");
}


?>
