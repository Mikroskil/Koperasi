<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Merpati Pos</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
	<link rel="stylesheet" href="fontawsome/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/a.css">
		
	<SCRIPT TYPE="text/javascript" src="js/jquery.js"></SCRIPT>
	<SCRIPT TYPE="text/javascript" src="js/validasi.js"></SCRIPT>
	<SCRIPT TYPE="text/javascript" src="js/bootstrap.js"></SCRIPT>
	<!--<SCRIPT TYPE="text/javascript" src="js/bootstrap.min.js"></SCRIPT>
	<SCRIPT TYPE="text/javascript" src="js/bootstrap-modal.js"></SCRIPT>
	<SCRIPT TYPE="text/javascript" src="js/button.js"></SCRIPT>
	<SCRIPT TYPE="text/javascript" src="js/bootstrap-alert.js"></SCRIPT>
	<SCRIPT TYPE="text/javascript" src="js/bootstrap-popover.js"></SCRIPT>
	<SCRIPT TYPE="text/javascript" src="js/bootstrap-transition.js"></SCRIPT>
	<SCRIPT TYPE="text/javascript" src="js/bootstrap-dropdown.js"></SCRIPT>-->
	
	<style type="text/css">
		  .form-signin {
			max-width: 250px;
			padding: 19px 29px 29px;
			margin: 0 auto 20px;
			background-color: #fff;
			border: 1px solid #e5e5e5;
			-webkit-border-radius: 5px;
			   -moz-border-radius: 5px;
					border-radius: 5px;
			-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			   -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
					box-shadow: 0 1px 2px rgba(0,0,0,.05);
		  }
		  .form-signin .form-signin-heading,
		  .form-signin .checkbox {
			margin-bottom: 10px;
		  }
		  .form-signin input[type="text"],
		  .form-signin input[type="password"] {
			font-size: 14px;
			height: auto;
			margin-bottom: 15px;
		  }

		</style>
 
	<script language="javascript">
    function validasi(form_data){
        var email = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
        var telp = /^0[0-9]{8,12}$/;
        
		if (form_data.nik.value == ""){
            alert("Anda belum mengisikan nik.");
            form_data.ktp.focus();
            return (false);
        }
		
        if (form_data.nama.value == ""){
            alert("Anda belum mengisikan Nama.");
            form_data.nama.focus();
            return (false);
        }
		
		if (form_data.alamat.value == ""){
            alert("Anda belum mengisikan Alamat.");
            form_data.nama.focus();
            return (false);
     
        }
		
		if (form_data.sandi.value == ""){
            alert("Anda belum mengisikan Sandi.");
            form_data.sandi.focus();
            return (false);
        }
		
        if (form_data.email.value == ""){
            alert("Anda belum mengisikan Email.");
            form_data.email.focus();
            return (false);
        }

        if(!form_data.email.value.match(email)){
            alert("Penulisan Email Salah.");
            form_data.email.focus();
            return false;
        }
   
        if($('#email-message').attr('data-id') == 'false'){
            alert("Email masih invalid.");
            form_data.email.focus();
            return (false);
        }

        if (form_data.telp.value == ""){
            alert("Anda belum mengisikan No. Handphone.");
            form_data.telp.focus();
            return (false);
        }
     
        
     
        if (form_data.k_password.value == ""){
            alert("Anda belum mengisikan Konfirmasi Password.");
            form_data.k_password.focus();
            return (false);
        }

        if(!form_data.telp.value.match(telp)){
            alert("Penulisan No. Handphone salah.");
            form_data.no_hp.focus();
            return false;
        }
  
        if (form_data.sandi.value.length < 5){
            alert("Password kurang dari 5 karakter.");
            form_data.password.focus();
            return (false);
        }

        if (form_data.password.value != form_data.k_password.value){
            alert("Konfirmasi Password tidak sama dengan password.");
            form_data.k_password.focus();
            return (false);
        }
       
        return (true);
    }
	</script>
	
	
	 
	 
 	
</head>
<body>

 
		<div class="sidebar">
			<div class="heading1">
			<img src="img/kope.png" class="logo">
			<h1>Merpati Pos</h1>
			<div class="grs"></div>
			</div>
			<nav>
			<ul class="icons-ul">
				<li><a href="index.php"><i class="icon-home icon-li"></i>BERANDA</a><hr></li>
				<li><a href="works.php"><i class="icon-book icon-li"></i>PROFIL PERUSAHAAN</a><hr></li>
				<li><a href="#"><i class="icon-plus-sign icon-li"></i>REGISTER</a><hr></li>
			</ul>
			</nav>
		</div>
		
		
		<div class="container">
			
				<div class="row">
					
						<div class=""> 
							<div class="form-login-container fc">
							
							<!-- tombol modal -->
							<p class="pull-right">
								<!-- Button to trigger modal -->
								<a href="#myModal" role="button" class="btn btn-small" data-toggle="modal"><i class="icon-user"></i> Login</a>
				 
								<!-- Modal -->
								<div class="modal"  id="myModal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title" id="myModalLabel">Silahkan Login</h4>
											  </div>
											<div class="modal-body">
												<form class="form-signin" action="#" method="post">
													<input name="username" id="username" type="text" class="input-block-level" placeholder="Username">
													<input name="password" id="password" type="password" class="input-block-level" placeholder="Password">
													<span id="button_login"><button class="btn btn-info btn-block" type="button">Sign in</button></span>
												</form>
											</div>
											<div class="modal-footer">
												
											</div>
											
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>
							</p>
							<form class="navbar-form pull-right">
								
							</form>
							
							</div>
						</div>
						
								 

				</div>
				
				<div class="row">
					
						<div class="col-md-2  "> </div>
						<div class="col-md-10  page_header">
								<h3><font color="#3C2A2A"><center>Form Pendaftaran Anggota</center></font></h3>
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
														<form onSubmit="return validasi(this)" id="form_data" name="form1" method="post" action="prosesdaftar.php">
															<tr><td><font face="verdana,arial" size=-1><center>NIK</center> </font></td><td>:<input type="text" name="nik" id="nik" onkeypress="return isNumberKey(event)" /></td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Nama</center> </font></td><td>:<input type="text" name="nama" id="nama" onkeypress="return isAlfabetKeyAndSpace(event)" /></td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Alamat</center> </font></td><td>:<textarea cols="18" name="alamat" id="alamat"></textarea></td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Jenis Kelamin</center></font></td>
															<td>
																
																	:<input type="radio" name="jkel" value="L" checked="checked">Laki-laki
																	<input type="radio" name="jkel" value="P">Perempuan
																
															</td>
															</tr>
															<tr><td><font face="verdana,arial" size=-1><center>Sandi</center></font></td><td>:<input type="password" name="sandi" id="sandi"/></td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>Email</center></font></td><td>:<input type="text" name="email" id="email" onkeypress="return isEmail(event)"/></td></tr>
															<tr><td><font face="verdana,arial" size=-1><center>No. Handphone </font></td><td>:<input type="text" name="telp" id="telp" onkeypress="return isNumberKey(event)"/></td></tr>
															<tr><td></td><td><input type="submit" value="Daftar"></td></tr>
														</form>	
														</tbody>
														
														</table>
							
					</div>
				</div>
		</div>


		
	<!--<link href="css2/bootstrap.css" rel="stylesheet" type="text/css" media="screen">-->
	<!--<script src="js2/jquery.js" type="text/javascript"></script>-->
	<!--<script src="js2/bootstrap.js" type="text/javascript"></script>-->

 
	
</body>
</html>