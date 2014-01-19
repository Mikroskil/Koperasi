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
				<li><a href="works.php"><i class="icon-book icon-li"></i>PROFIL PERUSAHAAN</a><hr></li>
				<li><a href="pinjam.php"><i class="icon-plus-sign icon-li"></i>AJUKAN PINJAMAN</a><hr></li>
				<li><a href="#"><i class="icon-user icon-li"></i>LIHAT DAFTAR TRANSAKSI</a><hr></li>
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
					
						<div class="col-md-8"></iv>
						<div class="col-md-8  page_header">
								<h3><font color="#3C2A2A">Daftar Transaksi</font></h3>
								<hr>
						</div>				 

				</div>
				
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-10">
					<form>
						<table class="table table-responsive table-key-value pull-center table-striped table-bordered" style="width:100%">
						<thead bgcolor="black">
							<tr>
								<td><font color="white"><font color="white"><font color="white"<font color="white">No</td>
								<td><font color="white"><font color="white"<font color="white">Tanggal</td>
								<td><font color="white"<font color="white">Uang Pinjaman</td>
								<td><font color="white">Jangka Waktu</td>
								<td><font color="white">Bunga</td>
								<td><font color="white">Cicilan</td>
								<td><font color="white">Status</td>
							</tr>
						</thead>
						<tbody>
							
							<?php
									$username = $_SESSION['namauser'];
									$query = mysql_query("select * from peminjam where username='$username' AND status='yes'");

									$no = 1;
									while ($data = mysql_fetch_array($query)) {
							?>
						<!--<tr>
								<td width="20px"><font color="red">No</font></td>
								<td width="10px">:</td>
								<td width="10px"><?php echo $no; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $data['tanggal']; ?></td>
							</tr>
							<tr>
								<td>Uang Pinjaman</td>
								<td>:</td>
								<td>Rp.&nbsp<?php echo $data['nominal']; ?></td>
							</tr>
							<tr>
								<td>Jangka Waktu</td>
								<td>:</td>
								<td><?php echo $data['jangka']; ?>&nbspbulan</td>
							</tr>
							<tr>
								<td>Bunga</td>
								<td>:</td>
								<td>1 %</td>
							</tr>
							<tr>
								<td>Cicilan</td>
								<td>:</td>
								<td>Rp. &nbsp<?php echo $data['cicilan']; ?>&nbsp/bulan</td>
							</tr>
							<tr>
								<td>Status</td>
								<td>:</td>
								<td><i>Aktif</i></td>
							</tr> -->
							
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['tanggal']; ?></td>
								<td><?php echo $data['nominal']; ?></td>
								<td><?php echo $data['jangka']; ?></td>
								<td><center>1%</center></td>
								<td><?php echo $data['cicilan']; ?></td>
								<td><i><?php echo $data['lunas']; ?></i></td>
							</tr>

							<?php
								$no++;
								}
							?>
						</tbody>
						<table>
					</form>
					</div>
					
				</div>
				
				
		</div>


		


 
	
</body>
</html>