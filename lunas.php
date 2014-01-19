<?php
include "inc/inc.koneksi.php";
/*
//tangkap data dari form
$id = $_POST['user_id'];
$password = md5($_POST['password']);
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$gaji = $_POST['gaji'];
$no_hp = $_POST['no_hp'];
$no_ktp = $_POST['no_ktp'];
$no_rek = $_POST['no_rek'];

//update data di database sesuai user_id
$query = mysql_query("update users set password='$password', fullname='$fullname', email='$email', alamat='$alamat', gaji='$gaji', no_hp='$no_hp', no_ktp='$no_ktp', no_rek='$no_rek' where user_id='$id'") or die(mysql_error());
*/
$id = $_GET['id'];
//$lunas = $_POST['lunas'];;
$query = mysql_query("update peminjam set lunas=REPLACE(lunas,'Sedang berjalan','lunas') where user_id='$id'") or die(mysql_error());
if ($query) {
    header('location:data_peminjam.php?message=success');
}
?>
