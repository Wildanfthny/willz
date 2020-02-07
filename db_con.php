<?php
$database = mysqli_connect("localhost","id12502062_root","12345","id12502062_db_login");
 
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>