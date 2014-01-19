 <?php
//panggil file config.php untuk menghubung ke server
include "inc/inc.koneksi.php";

//tangkap data dari form
$admin_id = $_POST['admin_id'];
$password = md5($_POST['password']);


//simpan data ke database
$query = mysql_query("insert into admin values('', '$admin_id', '$password')") or die(mysql_error());

if ($query) {
    header('location:add_admin.php?message=success');
}
?>