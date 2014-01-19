<?php


include "inc/inc.koneksi.php";
function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}
$username	= anti_injection($_POST[username]);
$pass		= anti_injection(md5($_POST[password]));
if (!ctype_alnum($username) OR !ctype_alnum($pass)){
?>
<script>
	alert('Sekarang loginnya tidak bisa di injeksi lho.');
	window.location.href='index.php';
</script>
<?php
}else{
	$login	=mysql_query("SELECT * FROM users WHERE username='$username' AND password='$pass'");
	$ketemu	=mysql_num_rows($login);
	if ($ketemu > 0){
		session_start();
	  	$r = mysql_fetch_array($login);
		$_SESSION[namauser]     = $r[username];
		$_SESSION[passuser]     = $r[password];
		$_SESSION[namalengkap]  = $r[fullname];
		$_SESSION[mail]  = $r[email];
		$_SESSION[gj]	= $r[gaji];
		$_SESSION[hp]	= $r[no_hp];
		$_SESSION[ktp]	= $r[no_ktp];
		$_SESSION[rek]	= $r[no_rek];
		header('location:works.php');
	}else{
	?>
    <script>
	alert('Maaf, Username atau password salah.');
	window.location.href='index.php';
	</script>
    <?php
	}
}

?>
