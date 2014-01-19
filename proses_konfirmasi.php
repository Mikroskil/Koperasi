 <?php
//panggil file config.php untuk menghubung ke server
include "inc/inc.koneksi.php";

//tangkap data dari form
$tanggal = date("d M Y");
$nama = $_POST['nama'];
$username = $_POST['username'];
$no_hp = $_POST['no_hp'];
$no_rek = $_POST['no_rek'];
$nominal = $_POST['nominal'];
$jangka = $_POST['jangka'];
$cicilan = $_POST['cicilan'];
$status = $_POST['status'];
$alasan = $_POST['alasan'];
$lunas = $_POST['lunas'];

//simpan data ke database
$query = mysql_query("insert into peminjam values('', '$tanggal', '$nama', '$username', '$no_hp', '$no_rek', '$nominal', '$jangka', '$cicilan', '$status', '$alasan','$lunas')") or die(mysql_error());

if ($query) {
    header('location:daftar_aju.php');
}
?>