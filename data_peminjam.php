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
				<li><a href="Member_list.php"><i class="icon-book icon-li"></i>Daftar Anggota</a><hr></li>
				<li><a href="#"><i class="icon-book icon-li"></i>Data Peminjam</a><hr></li>
				<li><a href="daftar_aju.php"><i class="icon-book icon-li"></i>Daftar Pengajuan</a><hr></li>
				<li><a href="keluar.php"><i class="icon-off icon-li"></i>Keluar</a><hr></li>
			</ul>
			</nav>
		</div> -->

		<?php
		include "nav.php";
		?>
		<div class="navigasi">
		<img src="img/kope.png" class="gbr-logo">
		<hr class="logo-line">
		<div class="daftar-link">
			<ul class="icons-ul">
				<li><a href="add_admin.php"><i class="icon-plus-sign icon-li"></i>Tambah Admin</a><hr></li>
				<li><a href="add_member.php"><i class="icon-plus-sign icon-li"></i>Tambah Anggota</a><hr></li>
				<li><a href="Member_list.php"><i class="icon-book icon-li"></i>Daftar Anggota</a><hr></li>
				<li><a href="#"><i class="icon-book icon-li"></i>Data Peminjam</a><hr></li>
				<li><a href="daftar_aju.php"><i class="icon-book icon-li"></i>Daftar Pengajuan</a><hr></li>
				<li><a href="keluar.php"><i class="icon-off icon-li"></i>Keluar</a><hr></li>
			</ul>		
		</div>
		<div class="tomboltogle"><i class="icon-2x icon-chevron-sign-right"></i></div> -->
		</div>
		
		<div class="container">
			<div class="row">
			
			</div>
			<div class="row">
				
				<div class="col-md-12  page_header">
								<h3><font color="#3C2A2A"><center>Daftar Peminjam</center></font></h3>
								<hr>
				</div>	
			</div>
			<div class="row">
				
				<div class="col-md-12">

				<table class="table table-responsive table-key-value pull-center table-striped table-bordered" style="width:100%">
															<thead bgcolor="black">
																<tr>
																	<td><font color="white"><center>No.</td>
																	<td><font color="white">Nama</td>
																	<td><font color="white">Username</td>
																	<td><font color="white">Nominal</td>
																	<td><font color="white">Jangka Waktu</td>
																	<td><font color="white"><center>Status</center></td>
																	<td><font color="white"><center>Opsi</center></td>
																</tr></font>
															</thead>
															<tbody>
																<?php
																

																$query = mysql_query("select * from peminjam where status='yes'");

																$no = 1;
																while ($data = mysql_fetch_array($query)) {
																?>
																	<tr>
																		<td><center><?php echo $no; ?></td>
																		<td><?php echo $data['nama']; ?></td>
																		<td><?php echo $data['username']; ?></td>
																		<td>Rp. <?php echo $data['nominal']; ?></td>
																		<td><?php echo $data['jangka']; ?> bulan</td>
																		<td><center><?php echo $data['lunas']; ?><center></td>
																		<td><center><a href="lunas.php?id=<?php echo $data['user_id']; ?>">lunas</a> || <a href="belum_lunas.php?id=<?php echo $data['user_id']; ?>">belum lunas</a> || <a href="delete_lunas.php?id=<?php echo $data['user_id']; ?>">Hapus</a></center></td>
																	</tr>
																<?php
																	$no++;
																}
																?>
															</tbody>
				</table>
			</div>
		</div>
		
</body>
</html>