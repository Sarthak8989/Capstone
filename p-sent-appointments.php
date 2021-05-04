<?php 
require_once "importance.php"; 

if(!Patient::isPatientIn()){
	Config::redir("login.php"); 
}
?> 

<html>
<head>
	<title>Sent Appointments</title>
	<?php require_once "include/head.php";  ?> 
</head>
<body>
	<?php require_once "include/header.php"; ?> 
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'><?php require_once "include/sidebar.php"; ?></div> <!-- this should be a sidebar --> 
			<div class='col-md-7'>
				<div class='content-area'> 
				<div class='content-header'> 
					Sent Appointments <small>View your sent appointments</small>
				</div>
				<div class='content-body'> 
					<?php Appointment::loadPatientSentAppointments();  ?>
				</div><!-- end of the content area --> 
				</div> 
				
			</div><!-- col-md-7 --> 

			<div class='col-md-3'>
				<img src='images/doc-background-one.png' class='img-responsive' /> 
			</div> <!-- this should be a sidebar -->
				
		</div> 
	</div> 
</body>
</html>