<?php
session_start();
include "inc/inc.koneksi.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
	<link rel="stylesheet" href="fontawsome/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/a.css">
		
	<SCRIPT TYPE="text/javascript" src="js/jquery.js"></SCRIPT>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>


	<script type="text/javascript">	
		$(function() {
			$(".icon-chevron-sign-right").click(function(){
				$(".navigasi").toggleClass("navigasihide",1000);
				return false;
			})     
		});
	</script>
 
 	
</head>
<body>

 
		<!-- <div class="sidebar">
			<div class="heading1">
			<img src="img/kope.png" class="logo">
			<h1>Admin</h1>
			<div class="grs"></div>
			</div>
			<nav>
			<ul class="icons-ul">
				<li><a href="add_admin.php"><i class="icon-plus-sign icon-li"></i>Tambah Admin</a><hr></li>
				<li><a href="add_member.php"><i class="icon-plus-sign icon-li"></i>Tambah Anggota</a><hr></li>
				<li><a href="Member_list.php"><i class="icon-book icon-li"></i>Daftar Anggota</a><hr></li>
				<li><a href="data_peminjam.php"><i class="icon-book icon-li"></i>Data Peminjam</a><hr></li>
				<li><a href="daftar_aju.php"><i class="icon-book icon-li"></i>Daftar Pengajuan</a><hr></li>
				<li><a href="keluar.php"><i class="icon-off icon-li"></i>Keluar</a><hr></li>
			</ul>
			</nav>
		</div> -->
		<?php
		include "nav.php";
		?>
		
		<div class ="container">
				<div class="row">
						<div class="pull-right">
							Welcome 
							<?php if (isset($_SESSION['namauser'])):?>
								<?php echo $_SESSION['namauser'];?>
							<?php endif;?>
						</div>
				</div>
				<div class="row">
					
						<div class="pull-right">
							
						</div>
						
								 

				</div>
		</div>
		
</body>
</html>