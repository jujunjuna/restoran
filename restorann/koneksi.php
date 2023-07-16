<?php
$koneksi = mysqli_connect("localhost","root","","restoran");
if (mysqli_connect_errno());{
	echo"Koneksi gagal, tolong nyalakan XAMPP:".mysqli_connect_error();
}
?>
