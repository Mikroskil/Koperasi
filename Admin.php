<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Merpati Pos</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
	<link rel="stylesheet" href="fontawsome/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/a.css">
		
	<SCRIPT TYPE="text/javascript" src="js/jquery.js"></SCRIPT>
	<SCRIPT TYPE="text/javascript" src="js/bootstrap.js"></SCRIPT>
	
	<script type="text/javascript">
	$(document).ready(function() {
		$(".text").val('');
		$("#username").focus();
	});
	function validasi(){
	var username = $("#username").val();
	var password = $("#password").val();
	  if (username.length == 0){
		alert("Anda belum mengisikan Username.");
		$("#username").focus();
		return false();
	  }		 
	  if (password.length == 0){
		alert("Anda belum mengisikan Password.");
		$("#password").focus();
		return false();
	  }
	  return true();
	}
	</script>
	
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
		  
		  .page_header h5{
				color: #fff;
				font:normal 50px fontsatu;
			}

		</style>
 
</head>
<body>

 
		
		
		<div class="container">
			<div class="row">
					
						
						<div class="page_header">
								<h5><font color="#3C2A2A"><center>Login Administrator</center></font></h5>
								<p class="pull-center">
								<form class="form-signin" action="cek_login_admin.php" method="post" name="login" onSubmit="return validasi(this)">
									<input name="username" id="username" type="text" class="input-block-level" placeholder="Username">
									<input name="password" id="password" type="password" class="input-block-level" placeholder="Password">
									<span id="button_login"><button class="btn btn-info btn-block" type="submit">Sign in</button></span>
								</form>
								</p>
						</div>	
							

				</div>
				
				
				
				
		</div>

</body>
</html>