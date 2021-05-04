<?php 
require_once "importance.php"; 

if(!User::loggedIn()){
	Config::redir("login.php"); 
}
?> 

<html>
<head>
	<title></title>
	<?php require_once "include/head.php";  ?> 
</head>
<body>
	<?php require_once "include/header.php"; ?> 
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'><?php require_once "include/sidebar.php"; ?></div> <!-- this should be a sidebar --> 
			<div class='col-md-10'>
				<div class='content-area'> 
				<div class='content-header'> 
					Doctors <small>Doctors' Records</small>
				</div>
				<?php require_once "include/alert.php";  ?> 
				<div class='content-body'> 
					<?php Doctor::load(); ?> 
				</div><!-- end of the content area --> 
				</div> 
				
			</div><!-- col-md-7 --> 

			
				
		</div> 
	</div> 
</body>
</html>
