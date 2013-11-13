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
				<li><a href="#"><i class="icon-off icon-li"></i>Keluar</a><hr></li>
			</ul>
			</nav>
		</div>
		
		
		<div class="container">
			
				<div class="row">
					
						
						
								 

				</div>
				
				<div class="row">
					
						<div class="col-md-3  "> </div>
						<div class="col-md-9  page_header">
								<h3><font color="#3C2A2A">Tambahkan Anggota</font></h3>
								<hr>
						</div>				 

				</div>
				
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-10">
					
						<font face="verdana,arial" size=-1>
						<center>
							
														<table class="table table-responsive table-key-value pull-center">
														<tbody>
															<tr><td><font face="verdana,arial" size=-1><center>Nama</center> </font></td><td>:<input type="text" name="name" /></td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Alamat</center> </font></td><td>:<textarea cols="18" name="ad"></textarea></td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Jenis Kelamin</center></font></td>
															<td>
																<form>
																	:<input type="radio" name="sex" value="male">Laki-laki
																	<input type="radio" name="sex" value="female">Perempuan
																</form>
															</td>
															</tr>
															<tr><td><font face="verdana,arial" size=-1><center>ID</center></font></td><td>:<input type="text" name="user" /></td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Password</center></font></td><td>:<input type="password" name="password" /></td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Email</center></font></td><td>:<input type="text" name="email" /></td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>No. Telp </font></td><td>:<input type="text" name="cp" /></td></tr>
															<tr><td></td><td><button type="submit" class="btn"><center>Tambah</center></button></td></tr>
															
														</tbody>
														</table>
							
					</div>
				</div>
		</div>
		
</body>
</html>
