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

 
		<!-- <div class="sidebar">
			<div class="heading1">
			<img src="img/kope.png" class="logo">
			<h1>Admin</h1>
			<div class="grs"></div>
			</div>
			<nav>
			<ul class="icons-ul">
				<li><a href="#"><i class="icon-plus-sign icon-li"></i>Tambah Admin</a><hr></li>
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
		<div class="container">
			
				<div class="row">
						<div class="pull-right">
							
							<?php if (isset($_SESSION['namaadmin'])):?>
								<?php echo $_SESSION['namaadmin'];?>
							<?php endif;?>
						</div>
				</div>
				
				<div class="row">
					
						<div class="col-md-3  "> </div>
						<div class="col-md-9  page_header">
								<h3><font color="#3C2A2A">Tambahkan Pengguna Sistem</font></h3>
								<hr>
						</div>				 

				</div>
				
				<div class="row">
					<div class="col-md-0"></div>
					<div class="col-md-12">
					
						<font face="verdana,arial" size=-1>
						<center>
														
														<form method="post" action="insert_admin.php">
														<table>
														<tbody>
															<tr><td><font face="verdana,arial" size=-1><center>Username</center></font></td><td width="10px">:</td><td><input type="text" name="admin_id" class="form-control" /></td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Password</center></font></td><td width="10px">:</td><td><input type="password" name="password" class="form-control" /></td></tr>
															<tr><td></td><td>&nbsp</td><td><button type="submit" class="btn btn-default btn-primary"><center>Tambahkan</center></button></td></tr>
															
														</tbody>
														</table>
														<?php
															if (!empty($_GET['message']) && $_GET['message'] == 'success') {
																echo '<h3>Berhasil menambah data!</h3>';
															}
														?>
														<?php
															if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
																echo '<h3>Berhasil menghapus data!</h3>';
															}
														?><br><br><br><br>
														<table class="table table-responsive table-key-value pull-center table-striped table-bordered">
															<thead bgcolor="black">
																<tr>
																	<td><font color="white"><center>No.</td>
																	<td><font color="white">Username</td>
																	<td><font color="white">Password</td>
																	<td><font color="white">Opsi</td>
																</tr></font>
															</thead>
															<tbody>
																<?php
																$query = mysql_query("select * from admin");

																$no = 1;
																while ($data = mysql_fetch_array($query)) {
																?>
																	<tr>
																		<td><center><?php echo $no; ?></td>
																		<td><?php echo $data['admin_id']; ?></td>
																		<td><?php echo $data['password']; ?></td>
																		<td><a href="delete_admin.php?id=<?php echo $data['user_id']; ?>">Hapus</a></td>
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