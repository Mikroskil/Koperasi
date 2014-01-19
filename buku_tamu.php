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
				<li><a href="works.php"><i class="icon-book icon-li"></i>PROFIL PERUSAHAAN</a><hr></li>
				<li><a href="#"><i class="icon-plus-sign icon-li"></i>AJUKAN PINJAMAN</a><hr></li>
				<li><a href="daftar_transaksi.php"><i class="icon-user icon-li"></i>LIHAT DAFTAR TRANSAKSI</a><hr></li>
				<li><a href="keluar.php"><i class="icon-off icon-li"></i>KELUAR</a><hr></li>
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
					
						<div class="col-md-0  "> </div>
						<div class="col-md-12  page_header">
								<h3><font color="#3C2A2A"><center>Buku tamu</center></font></h3>
								<hr>
						</div>				 

				</div>
				
				<div class="row">
					
					<div class="col-md-12">
					
						<font face="verdana,arial" size=-1>
						<center>
												
												
												<form method="post" action="proses_bukutamu.php" enctype="multipart/form-data" name="form1" id="form1">
												<input type="hidden" name="username" value="<?php echo $_SESSION['namauser']; ?>" />
												<?php
													if (!empty($_GET['message']) && $_GET['message'] == 'success') {
													echo '<font color="red">Terkirim!</font>';
												}
												?>
												
														<table class="table table-responsive table-key-value pull-center">
														<tbody>
															<tr>
																<td><center><i>Tuliskan kritik atau saran anda pada kolom dibawah ini...</i></center></td>
															</tr>
															<tr>
																<td><center><textarea name="pesan" cols="50" rows="10"></textarea></center><td>
															</tr>
															<tr>
																<td><center><button type="submit" class="btn"><center>Kirim</button></center></td>
															</tr>
														</tbody>
														</table>
												</form>
						</center>
					</div>
				</div>
		</div>


		


 
	
</body>

</html>