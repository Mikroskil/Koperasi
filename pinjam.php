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
 	<script language="javascript">
	function jual()
	{
		document.form1.cicilan.value=(parseInt(document.form1.nominal.value) +  (1/100*parseInt(document.form1.nominal.value)) / parseInt(document.form1.jangka.value);
	}
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
								<h3><font color="#3C2A2A"><center>Ajukan Pinjaman</center></font></h3>
								<hr>
						</div>				 

				</div>
				
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-10">
					
						<font face="verdana,arial" size=-1>
						<center>
												
												
												<form method="post" action="proses_aju.php" enctype="multipart/form-data" name="form1" id="form1">
												<input type="hidden" name="username" value="<?php echo $_SESSION['namauser']; ?>" />
												<input type="hidden" name="fullname" value="<?php echo $_SESSION['namalengkap']; ?>" />
												<input type="hidden" name="no_hp" value="<?php echo $_SESSION['hp']; ?>" />
												<input type="hidden" name="no_ktp" value="<?php echo $_SESSION['ktp']; ?>" />
												<input type="hidden" name="no_rek" value="<?php echo $_SESSION['rek']; ?>" />
												<input type="hidden" name="gaji" value="<?php echo $_SESSION['gj']; ?>" />
												
														<table class="table table-responsive table-key-value pull-center">
														<tbody>
															
															<!--<?php if (isset($_SESSION['namalengkap'])):?>-->
															<tr><td><font face="verdana,arial" size=-1><center>Nama</center> </font></td><td>: <?php echo $_SESSION['namalengkap']; ?></td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Gaji (Rp.)</center> </font></td><td>: <?php echo $_SESSION['gj']; ?></td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Nominal (Rp.)</center> </font></td><td>: 
																<select name="nominal" id="nominal">
																	<option value="5000000">Rp. 5.000.000,-</option>
																	<option value="10000000">Rp. 10.000.000,-</option>
																	<option value="15000000">Rp. 15.000.000,-</option>
																	<option value="20000000">Rp. 20.000.000,-</option>
																	<option value="25000000">Rp. 25.000.000,-</option>
																	<option value="30000000">Rp. 30.000.000,-</option>
																	<option value="35000000">Rp. 35.000.000,-</option>
																	<option value="40000000">Rp. 40.000.000,-</option>
																	<option value="45000000">Rp. 45.000.000,-</option>
																	<option value="50000000">Rp. 50.000.000,-</option>
																</select> x 1%
															</td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Jangka Waktu</center> </font></td><td>: 
																<select name="jangka" id="jangka">
																	<option value="12">12 bulan</option>
																	<option value="24">24 bulan</option>
																	<option value="36">36 bulan</option>
																	<option value="48">48 bulan</option>
																	<option value="60">60 bulan</option>
																</select>
															</td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Cicilan</center> </font></td><td>: <button type="button" value=">>" onclick="hitung()" size="3" class="btn-small">Rp.
															<input type="text" name="cicilan" id="cicilan" size="8" readonly />  /bulan</td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Bukti</center> </font></td><td>: <input name="nama_file" type="file" id="nama_file" size="20" /></td></tr>
															<tr><td></td><td><button type="submit" class="btn"><center>Ajukan</center></button></td></tr></font>
															<!--<?php endif;?>-->
														</table>
												</form>
						</center>
					</div>
				</div>
		</div>


		


 
	
</body>
<script language= "JavaScript">
function hitung()

{
  var saldo=parseFloat(document.form1.nominal.value);
  var waktu=parseFloat(document.form1.jangka.value);

  var hasil="";
  saldo=(saldo+(saldo*0.01))/waktu;
  x = Math.ceil(saldo)
  document.form1.cicilan.value=x;

}
</script>
</html>