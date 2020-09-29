<?php
$servername="localhost";
$username="root";
$password="";
$db_name="siswa";

$koneksi=mysqli_connect($servername,$username,$password,$db_name);
if (!$koneksi) {
  die("gagal menyambung ke database".mysqli_connect_error());
}
 ?>
