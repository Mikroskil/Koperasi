<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Contact Us</title>

</head>

<body>

<?php
	//konek database
	$conn=mysql_connect("localhost", "root", "");
	mysql_select_db("daftar");
	
	//proses penyimpanan data
	$nik=$_REQUEST['nik'];
	$nama=$_REQUEST['nama'];
	$sandi=$_REQUEST['sandi'];
	$alamat=$_REQUEST['alamat'];
	$email=$_REQUEST['email'];
	$jkel=$_REQUEST['jkel'];
	$telp=$_REQUEST['telp'];
	
	$sql="INSERT INTO anggota (nik, nama, sandi, alamat, email, kelamin, telp) values ('$nik','$nama','$sandi','$alamat','$email','$jkel','$telp')";

	//menyimpan data ke database
	mysql_query($sql);
	echo "<h2>Data Telah Disimpan</h2>";
?>
</body>
</html>