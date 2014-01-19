<?php
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
		<?php
		include "nav.php";
		?>
		<div class="container">
			
				<div class="row">
						 

				</div>
				
				<div class="row">
					
						
						<div class="col-md-12  page_header">
								<h3><center><font color="#3C2A2A">Konfirmasi</font></center></h3>
								<hr>
						</div>				 

				</div>
				
				<div class="row">
					
					<div class="col-md-12">
					
						<font face="verdana,arial" size=-1>
						<center>
													
														
															<?php
																$id = $_GET['id'];

																$query = mysql_query("select * from ajukan where user_id='$id'") or die(mysql_error());

																$data = mysql_fetch_array($query);
															?>
															 <form name="update_data" action="proses_konfirmasi.php" method="post">
															 <!--<input type="hidden" name="user_id" value="<?php //echo $id; ?>" />-->
															 <input type="hidden" name="nama" value="<?php echo $data['nama']; ?>" />
															 <input type="hidden" name="username" value="<?php echo $data['username']; ?>" />
															 <input type="hidden" name="no_hp" value="<?php echo $data['no_hp']; ?>" />
															 <input type="hidden" name="no_rek" value="<?php echo $data['no_rek']; ?>" />
															 <input type="hidden" name="nominal" value="<?php echo $data['nominal']; ?>" />
															 <input type="hidden" name="jangka" value="<?php echo $data['jangka']; ?>" />
															 <input type="hidden" name="cicilan" value="<?php echo $data['cicilan']; ?>" />
															 <input type="hidden" name="lunas" value="Sedang berjalan" />

																<table class="table table-responsive table-key-value pull-center">
																	<tbody>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Nama Lengkap</center></font></td>
																			<td>:</td>
																			<td><?php echo $data['nama']; ?>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Nominal</center></font></td>
																			<td>:</td>
																			<td>Rp. <?php echo $data['nominal']; ?>,-
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Jangka Waktu</center></font></td>
																			<td>:</td>
																			<td><?php echo $data['jangka']; ?> bulan
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Cicilan</center></font></td>
																			<td>:</td>
																			<td>Rp. <?php echo $data['cicilan']; ?> /bulan
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Status</center></font></td>
																			<td>:</td>
																			<td><input type="radio" name="status" value="yes"> Terima <input type="radio" name="status" value="no"> Tolak </td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Alasan</center></font></td>
																			<td>:</td>
																			<td><textarea name="alasan"></textarea></td>
																		</tr>
																		<tr>
																			<td></td><td><td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" class="btn"/></td>
																		</tr>
																	</tbody>
																</table>
															</form>
															<a href="daftar_aju.php">Kembali</a>
															
														
													
					</div>
				</div>
		</div>
		
</body>
</html>