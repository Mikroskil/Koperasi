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
								<h3><center><font color="#3C2A2A">Form Input Data Anggota</font></center></h3>
								<hr>
						</div>				 

				</div>
				
				<div class="row">
					
					<div class="col-md-12">
					
						<font face="verdana,arial" size=-1>
						<center>
													
														
															<?php
																$id = $_GET['id'];

																$query = mysql_query("select * from users where user_id='$id'") or die(mysql_error());

																$data = mysql_fetch_array($query);
															?>
															 <form name="update_data" action="update.php" method="post">
															 <input type="hidden" name="user_id" value="<?php echo $id; ?>" />
																<table class="table table-responsive table-key-value pull-center">
																	<tbody>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Username</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="username" maxlength="20" required="required" value="<?php echo $data['username']; ?>" disabled /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Password</center></font></td>
																			<td>:</td>
																			<td><input type="password" name="password" maxlength="20" required="required"  /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Nama Lengkap</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="fullname" maxlength="100" required="required" value="<?php echo $data['fullname']; ?>" /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Email</center></font></td>
																			<td>:</td>
																			<td><input type="email" name="email" required="required" value="<?php echo $data['email']; ?>" /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Alamat</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="alamat" required="required" value="<?php echo $data['alamat']; ?>" /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Gaji /bulan</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="gaji" required="required" value="<?php echo $data['gaji']; ?>" /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Nomor HP</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="no_hp" maxlength="14" required="required" value="<?php echo $data['no_hp']; ?>" /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Nomor KTP</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="no_ktp" maxlength="14" required="required" value="<?php echo $data['no_ktp']; ?>" /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-3><center>Nomor Rekening</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="no_rek" maxlength="14" required="required" value="<?php echo $data['no_rek']; ?>" /></td>
																		</tr>
																		<tr>
																			<td></td><td><td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" class="btn"/></td>
																		</tr>
																	</tbody>
																</table>
															</form>
															<a href="add_member.php">Lihat Data</a>
															
														
													
					</div>
				</div>
		</div>
		
</body>
</html>