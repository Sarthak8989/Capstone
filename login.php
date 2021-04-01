<?php 
require_once "importance.php"; 

if(User::loggedIn()){
	Config::redir("index.php"); 
}
?> 

<html>
<head>
	<title>HMS</title>
	<?php require_once "include/head.php";  ?> 
</head>
<body>
	<?php require_once "include/header.php"; ?> 
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-3'> 
				<img src='images/doc-background-two-right.png' class='img-responsive' /> 
			</div>
			<div class='col-md-9'>
				<div class='content-area'> 
					<div class='content-header'> 
						Login <small>Login to access the system</small>
					</div>
					<div class='content-body'> 

						<?php 
							if(isset($_GET['attempt'])){

								$status = $_GET['attempt'];

								if($status == 1){
									$header = "Login as an Admin"; 
								}
								echo "<center><div class='badge-header'>$header</div></center>"; 


								if(isset($_POST['login-email'])){
									$email = $_POST['login-email']; 
									$password = $_POST['login-password'];

									if($email == "" || $password == ""){
										Messages::error("You must fill in all the fields");
									} else {
										User::login($email, $password, $status);
									}

								}

							?> 
							<div class='row'>
								<div class='col-md-2'></div>
								<div class='col-md-8'>
									<div class='form-holder'>
										<?php Db::form(array("Email", "Password"), 3, array("login-email", "login-password"), array("text", "password"), "Login"); ?> 
									</div>
								</div> 
								<div class='col-md-3'></div>
							</div> 
							<?php 
								// ENDNG TGHE LOGIN AREA
							} else {

						?>

						<center><div class='badge-header'>Login As:</div></center> 
						<div class='row'>
							<div class='col-md-2'></div>
							<div class='col-md-8'> 
								<div class='row' style='margin-top: 50px;'> 
									<div class='col-md-12'>
										<center>
											<div class='img-login-icons'>
												<img  class='img-responsive' src='images/3678411 - hospital medical nurse.png' alt='login as a doctor' />
											</div>
											<center><a href='login.php?attempt=1'><div class='badge-header'>Admin</div></a></center> 

										</center> 
									</div> 
								</div> 
							</div> 
							<div class='col-md-8'></div>
							<?php } ?> 
						</div><!-- end of the content area --> 
					</div> 
				</div>  
			</div> 
		</div> 
	</div> 
</body>
</html>
