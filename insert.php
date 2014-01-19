 <?php
//panggil file config.php untuk menghubung ke server
include "inc/inc.koneksi.php";
error_reporting(0);
//tangkap data dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
$fullname = $_POST['fullname'];
$jen_kel = $_POST['jen_kel'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$gaji = $_POST['gaji'];
$no_hp = $_POST['no_hp'];
$no_ktp = $_POST['no_ktp'];
$no_rek = $_POST['no_rek'];

//simpan data ke database
// Cek username di database
$cek_username=mysql_num_rows(mysql_query
             ("SELECT username FROM users
               WHERE username='$username'"));
// Kalau username sudah ada yang pakai
if ($cek_username > 0){
  echo "Username sudah ada yang pakai. Ulangi lagi";
}
// Kalau username valid, inputkan data ke tabel users
else{
$query = mysql_query("insert into users values('', '$username', '$password', '$email', '$fullname', '$jen_kel', '$alamat', '$gaji', '$no_hp', '$no_ktp', '$no_rek')") or die(mysql_error());
}
if ($query) {
    header('location:input_member.php?message=success');
}
?>
<br><br>
<a href="input_member.php">Ulangi</a>