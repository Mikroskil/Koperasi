 <?php
include "inc/inc.koneksi.php";

$id = $_GET['id'];

$query = mysql_query("delete from users where user_id='$id'") or die(mysql_error());

if ($query) {
    header('location:add_member.php?message=delete');
}
?>