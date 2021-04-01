<?php 
require_once "importance.php"; 

if(!User::loggedIn()){
	Config::redir("login.php"); 
}
?> 

<html>
<head>
	<title>ADMIN | Home </title>
	<?php require_once "include/head.php";  ?> 
</head>
<body>
	<?php require_once "include/header.php"; ?> 
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'><?php require_once "include/sidebar.php"; ?></div>  
			<div class='col-md-7'>
				<div class='content-area'> 
				<div class='content-header'> 
					Dashboard <small>View your dashboard</small>
				</div>
				<div class='content-body'>
					<div class='row'>
						<?php Dashboard::draw("Doctors", Dashboard::doctors(),  "doctors-record.php");?>
						<?php Dashboard::draw("Patients", Dashboard::patients(),  "patients.php") ?>
						<?php Dashboard::draw("Patient Book", Dashboard::getPatientRecords(),  "patients.php") ?>
						<?php Dashboard::draw("Appointments", Dashboard::Appointments(),  "appointments.php") ?>
						<?php Dashboard::draw("Change Password", "",  "change-password.php"); ?>
					</div>
				</div>
				</div> 
				
			</div>  

			<div class='col-md-3'>
				<img src='images/doc-background-one.png' class='img-responsive' /> 
			</div> 
				
		</div> 
	</div> 
</body>
</html>
