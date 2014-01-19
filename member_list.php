<?php
include "inc/inc.koneksi.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Anggota</title>

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
				<li><a href="#"><i class="icon-book icon-li"></i>Daftar Anggota</a><hr></li>
				<li><a href="data_peminjam.php"><i class="icon-book icon-li"></i>Data Peminjam</a><hr></li>
				<li><a href="daftar_aju.php"><i class="icon-book icon-li"></i>Daftar Pengajuan</a><hr></li>
				<li><a href="keluar.php"><i class="icon-off icon-li"></i>Keluar</a><hr></li>
			</ul>
			</nav>
		</div> -->
		<?php
			include "nav.php";
		?>
		
		<div class="container">
			
				<div class="row">
					
						
						
								 

				</div>
				
				<div class="row">
					
						
						<div class="col-md-12  page_header">
								<h3><font color="#3C2A2A">Daftar Anggota</font></h3>
								<hr>
						</div>				 

				</div>
				
				<div class="row">
					
					<div class="col-md-12">
					
						<font face="verdana,arial" size=-1>
						<center>
													
														<table class="table table-responsive table-key-value pull-center table-striped table-bordered">
															
															<thead bgcolor="black">
																<tr>
																	<td><font color="white"><center>No.</td>
																	<td><font color="white">Nama Lengkap</td>
																	<td><font color="white">Email</td>
																	<td><font color="white">Jenis Kelamin</td>
																	<td><font color="white">Alamat</td>
																	<td><font color="white">No. Hp</td>
																</tr></font>
															</thead>
															<tbody>
																<?php
																$query = mysql_query("select * from users");

																$no = 1;
																while ($data = mysql_fetch_array($query)) {
																?>
																	<tr>
																		<td><center><?php echo $no; ?></td>
																		<td><?php echo $data['fullname']; ?></td>
																		<td><?php echo $data['email']; ?></td>
																		<td><?php echo $data['jen_kel']; ?></td>
																		<td><?php echo $data['alamat']; ?></td>
																		<td><?php echo $data['no_hp']; ?></td>
																	</tr>
																<?php
																	$no++;
																}
																?>
															</tbody>
															
														</table>
													
					</div>
				</div>
		</div>
		
</body>
</html>