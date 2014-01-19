 <?php
include "inc/inc.koneksi.php";

$id = $_GET['id'];

$query = mysql_query("delete from ajukan where user_id='$id'") or die(mysql_error());

if ($query) {
    header('location:daftar_aju.php?message=delete');
}
?>