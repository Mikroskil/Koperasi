 <?php
include "inc/inc.koneksi.php";

$id = $_GET['id'];

$query = mysql_query("delete from peminjam where user_id='$id'") or die(mysql_error());

if ($query) {
    header('location:data_peminjam.php?message=delete');
}
?>