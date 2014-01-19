<?php
session_start();
include "inc/inc.koneksi.php";
//include "cek_login.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Merpati Pos</title>

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
			<h1>Merpati Pos</h1>
			<div class="grs"></div>
			</div>
			<nav>
			<ul class="icons-ul">
				<li><a href="#"><i class="icon-book icon-li"></i>PROFIL PERUSAHAAN</a><hr></li>
				<li><a href="pinjam.php"><i class="icon-plus-sign icon-li"></i>AJUKAN PINJAMAN</a><hr></li>
				<li><a href="daftar_transaksi.php"><i class="icon-user icon-li"></i>LIHAT DAFTAR TRANSAKSI</a><hr></li>
				<li><a href="index.php"><i class="icon-off icon-li"></i>KELUAR</a><hr></li>
			</ul>
			</nav>
		</div> -->
		
		<?php
		include "nav_user.php";
		?>

		<div class="container">
			
				<div class="row">
						<div class="pull-right">
							Welcome 
							<?php if (isset($_SESSION['namalengkap'])):?>
								<?php echo $_SESSION['namalengkap'];?>
							<?php endif;?>
						</div>
				</div>

				<div class="row">
					
						<div class="col-md-1  "> </div>
						<div class="col-md-11  page_header">
								<h3><font color="#3C2A2A"><center>Profil Perusahaan</center></font></h3>
								<hr>
						</div>				 

				</div>

				<div class="row">
					
						<div class="col-md-3  "> </div>
						<div class="col-md-9  konten">

							<div class="row work-container">
								<div class="col-md-5">
									<center><h3>1930</h3></center><br/>
									<center><img src="img/k1.jpg" class="img-responsive img-circle myworkthumb"><center>
								</div>
								<div class="col-md-5">
									<center><h3>Sekarang</h3></center><br/>
									<center><img src="img/k2.jpg" class="img-responsive img-circle myworkthumb"></center>
								</div>
								
							</div>
							
							
								

						</div>				 

				</div>

		</div>
 
 
	
</body>
</html>