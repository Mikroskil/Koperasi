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
								<h3><font color="#3C2A2A">Daftar Permintaan Ajuan</font></h3>
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
														
														<table class="table table-responsive table-key-value table-striped pull-center table-bordered">
															
															<thead bgcolor="black"><font color="white">
																<tr>
																	<td><font color="white"><center>No.</td>
																	<td><font color="white"><font color="white">Nama Lengkap</td>
																	<td><font color="white">Username</td>
																	<td><font color="white">No. Hp</td>
																	<td><font color="white">No. Ktp</td>
																	<td><font color="white">No. Rek</td>
																	<td><font color="white">Gaji</td>
																	<td><font color="white">Nominal</td>
																	<td><font color="white">Jangka Waktu</td>
																	<td><font color="white">Cicilan</td>
																	<td><font color="white"><center>Opsi</center></td>
																</tr></font>
															</thead>
															<tbody>
																<?php
																$query = mysql_query("select * from ajukan");

																$no = 1;
																while ($data = mysql_fetch_array($query)) {
																?>
																	<tr>
																		<td><center><?php echo $no; ?></td>
																		<td><?php echo $data['nama']; ?></td>
																		<td><?php echo $data['username']; ?></td>
																		<td><?php echo $data['no_hp']; ?></td>
																		<td><?php echo $data['no_ktp']; ?></td>
																		<td><?php echo $data['no_rek']; ?></td>
																		<td><?php echo $data['gaji']; ?></td>
																		<td><?php echo $data['nominal']; ?></td>
																		<td><?php echo $data['jangka']; ?> bulan</td>
																		<td><?php echo $data['cicilan']; ?></td>
																		<td><a href="konfirmasi.php?id=<?php echo $data['user_id']; ?>">Konfirmasi</a> || <a href="delete_aju.php?id=<?php echo $data['user_id']; ?>">Hapus</a></td>
																	</tr>
																		<td colspan="11"><center><?php echo "<img src='".$data['nama_file']."'width='200px' height='100px'>" ; ?></center></td>
																	<tr>

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