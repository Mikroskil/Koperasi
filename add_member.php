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
						<div class="pull-right">
							
							<?php if (isset($_SESSION['namaadmin'])):?>
								<?php echo $_SESSION['namaadmin'];?>
							<?php endif;?>
						</div>
				</div>
				
				<div class="row">
					
						
						<div class="col-md-12  page_header">
								<h3><font color="#3C2A2A">Data Anggota</font></h3>
								<?php
									if (!empty($_GET['message']) && $_GET['message'] == 'success') {
										echo '<h3>Berhasil meng-update data!</h3>';
								}
								?>
								
								<hr>
								
						</div>				 

				</div>
				
				<div class="row">
					
					<div class="col-md-12">
						
						<font face="verdana,arial" size=-1>
						
						<center>
														<a href="input_member.php">+ Tambah Data</a>
														<table class="table table-responsive table-key-value pull-center table-striped table-bordered">
															
															<thead bgcolor="black">
																<tr>
																	<td><font color="white"><center>No.</td>
																	<td><font color="white">Username</td>
																	<td><font color="white">Password</td>
																	<td><font color="white"><center>Email</center></td>
																	<td><font color="white">Nama Lengkap</td>
																	<td><font color="white">Jenis Kelamin</td>
																	<td><font color="white">Alamat</td>
																	<td><font color="white">Gaji</td>
																	<td><font color="white">No. Hp</td>
																	<td><font color="white">No. Ktp</td>
																	<td><font color="white">No. Rek</td>
																	<td><font color="white"><center>Opsi</center></td>
																</tr>
															</thead>
															<tbody>
																<?php
																$query = mysql_query("select * from users");

																$no = 1;
																while ($data = mysql_fetch_array($query)) {
																?>
																	<tr>
																		<td><center><?php echo $no; ?></td>
																		<td><?php echo $data['username']; ?></td>
																		<td><?php echo $data['password']; ?></td>
																		<td><?php echo $data['email']; ?></td>
																		<td><?php echo $data['fullname']; ?></td>
																		<td><?php echo $data['jen_kel']; ?></td>
																		<td><?php echo $data['alamat']; ?></td>
																		<td><?php echo $data['gaji']; ?></td>
																		<td><?php echo $data['no_hp']; ?></td>
																		<td><?php echo $data['no_ktp']; ?></td>
																		<td><?php echo $data['no_rek']; ?></td>
																		<td><a href="edit_member.php?id=<?php echo $data['user_id']; ?>">Edit</a> || <a href="delete.php?id=<?php echo $data['user_id']; ?>">Hapus</a></td>
																	</tr>
																<?php
																	$no++;
																}
																?>
															</tbody>
															
														</table>
														<a href="adminpage.php"><< kembali</a>
													
					</div>
				</div>
		</div>
		
</body>
</html>