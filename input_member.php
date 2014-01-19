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
 
 	
</head>
<body>

		<!--
		<div class="sidebar">
			<div class="heading1">
			<img src="img/kope.png" class="logo">
			<h1>Admin</h1>
			<div class="grs"></div>
			</div>
			<nav>
			<ul class="icons-ul">
				<li><a href="add_admin.php"><i class="icon-plus-sign icon-li"></i>Tambah Admin</a><hr></li>
				<li><a href="#"><i class="icon-plus-sign icon-li"></i>Tambah Anggota</a><hr></li>
				<li><a href="Member_list.php"><i class="icon-book icon-li"></i>Daftar Anggota</a><hr></li>
				<li><a href="data_peminjam.php"><i class="icon-book icon-li"></i>Data Peminjam</a><hr></li>
				<li><a href="keluar.php"><i class="icon-off icon-li"></i>Keluar</a><hr></li>
			</ul>
			</nav>
		</div>
		
		-->
		<div class="container">
			
				<div class="row">
						<div class="pull-right">
							
							<?php if (isset($_SESSION['namaadmin'])):?>
								<?php echo $_SESSION['namaadmin'];?>
							<?php endif;?>
						</div>
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
																if (!empty($_GET['message']) && $_GET['message'] == 'success') {
																	echo '<h3>Berhasil menambah data!</h3>';
																}
															?>
															 <form name="input_data" action="insert.php" method="post">
																<!--<table class="table table-responsive table-key-value pull-center table-striped">-->
																<table class="pull-center table-striped table">	
																	<tbody>
																		<tr>
																			<td><font face="verdana,arial" size=-1><center>Username</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="username" maxlength="20" required="required" class="input-small" /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-1><center>Password</center></font></td>
																			<td>:</td>
																			<td><input type="password" name="password" maxlength="20" required="required" class="input-small" /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-1><center>Nama Lengkap</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="fullname" maxlength="100" required="required" class="input-small" /></td>
																		</tr>
																		<tr><td><font face="verdana,arial" size=-1><center>Jenis Kelamin</center></font></td>
																			<td>:</td>
																				<form>
																					<td>
																					<input type="radio" name="jen_kel" value="Laki-laki">Laki-laki
																					<input type="radio" name="jen_kel" value="Perempuan">Perempuan
																				</form>
																			</td>
																		<tr>
																			<td><font face="verdana,arial" size=-1><center>Email</center></font></td>
																			<td>:</td>
																			<td><input type="email" name="email" required="required" class="input-small" /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-1><center>Alamat</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="alamat" required="required" class="input-small" /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-1><center>Gaji /bulan</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="gaji" required="required" class="input-small" /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-1><center>Nomor HP</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="no_hp" maxlength="14" required="required" class="input-small" /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-1><center>Nomor KTP</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="no_ktp" maxlength="14" required="required" class="input-small" /></td>
																		</tr>
																		<tr>
																			<td><font face="verdana,arial" size=-1><center>Nomor Rekening</center></font></td>
																			<td>:</td>
																			<td><input type="text" name="no_rek" maxlength="14" required="required" class="input-small" /></td>
																		</tr>
																		<tr>
																			<td></td><td>&nbsp</td><td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" class="btn btn-primary"/></td>
																		</tr>
																	</tbody>
																</table>
															</form>
															<a href="add_member.php">kembali</a>
															
														
													
					</div>
				</div>
		</div>
		
</body>
</html>