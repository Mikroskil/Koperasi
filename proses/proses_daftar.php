<html>
<head>
<title>proses</title>
</head>
<body>
<?php
	//konek database
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("daftar_anggota");
	
	//proses penyimpanan data
	$nik=$_POST['NIK'];
	$nama=$_POST['Nama'];
	$sandi=$_POST['Password'];
	$email=$_POST['Email'];
	$sex=$_POST['JKelamin'];
	$telp=$_POST['NTelp'];
	
	//data yang akan disimpan
	echo "NIK : $nik <br>";
	echo "Nama : $nama <br>";
	echo "Email : $email <br>";
	echo "Jenis Kelamin : $sex <br>";
	echo "No Telepom : $telp <br>";
	
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("daftar_anggota",$conn);
	if (!empty($nik) AND !empty($nama) AND !empty($email) AND !empty($sex) AND !empty($telp) )
	{
			$sqlstr=mysql_query("insert to anggota(NIK, Nama, Password, Email, JKelamin, Ntelp) value ('$nik','$nama','$sandi','$email','$sex','$telp')");
			echo "<br>Berhasil</br>";
	}
?>
</body>
</html>