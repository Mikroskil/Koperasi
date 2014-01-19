 <?php
//panggil file config.php untuk menghubung ke server
include "inc/inc.koneksi.php";
error_reporting(0);
$namafolder="gambar/"; //tempat menyimpan file

//tangkap data dari form

//$jenis_gambar = $_FILES['nama_file']['type'];

//simpan data ke database
//$query = mysql_query("insert into ajukan values('', '$tanggal', '$username', '$fullname', '$no_hp', '$no_ktp', '$no_rek', '$gaji', '$nominal', '$jangka', '$cicilan')") or die(mysql_error());

//if ($query) {
  //  header('location:pinjam.php');
//}


if (!empty($_FILES["nama_file"]['tmp_name']))
{
	$jenis_gambar=$_FILES['nama_file']['type'];
	$tanggal = date("d M Y");
	$username = $_POST['username'];
	$fullname = $_POST['fullname'];
	$no_hp = $_POST['no_hp'];
	$no_ktp = $_POST['no_ktp'];
	$no_rek = $_POST['no_rek'];
	$gaji = $_POST['gaji'];
	$nominal = $_POST['nominal'];
	$jangka = $_POST['jangka'];
	$cicilan = $_POST['cicilan'];
	
// Cek username di database
$cek_username=mysql_num_rows(mysql_query
             ("SELECT username FROM peminjam
               WHERE username='$username'"));
// Kalau username sudah ada yang pakai
if ($cek_username > 0){
  echo "Peminjaman terakhir anda belum lunas, Anda belum bisa mengajukan pinjaman.";
}
// Kalau username valid, inputkan data ke tabel users
else{
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="insert into ajukan values ('', '$tanggal', '$username', '$fullname', '$no_hp', '$no_ktp', '$no_rek', '$gaji', '$nominal', '$jangka', '$cicilan','$gambar')";
			//$query = mysql_query("insert into ajukan values()") or die(mysql_error());
				//$sql="insert into ajukan(nama_file) values ('$gambar')";
			$res=mysql_query($sql) or die (mysql_error());
			//echo "Gambar berhasil dikirim ".$gambar;
			//echo "<p>Judul Gambar : $judul_gambar</p>";		   
			//echo "<p><img src=\"$gambar\" width=\"200\"/></p>";		   
		} else {
		   //echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		//echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
}} else {
	//echo "Anda belum memilih gambar";
}

if ($sql) {
   header('location:pinjam.php');
}

?>

