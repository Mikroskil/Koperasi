 <?php
include "inc/inc.koneksi.php";

//tangkap data dari form

$username = $_POST['username'];
$pesan = $_POST['pesan'];

//update data di database sesuai user_id
$query = mysql_query("insert into bukutamu values('', '$username', '$pesan')") or die(mysql_error());

if ($query) {
    header('location:buku_tamu.php?message=success');
}
?>