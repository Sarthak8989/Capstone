<?php 
require_once "importance.php"; 

if(Patient::isPatientIn()){
	header("Location: patient-data.php");
	return; 
}
?> 

<html>
<head>
	<title>Patient!!Login</title>
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
					Patient's Data <small>Access and download your data</small>
				</div>
				<div class='content-body'>
					<div class='form-holder'><br /><br />
						<?php 
							$phone = ""; 
							$number = "";
							
							if(isset($_POST['phone'])){
								$phone = $_POST['phone']; 
								$number = $_POST['p-number'];
								Patient::authorize($phone, $number);
							}
							
							$form = new Form(2, "post");
							$form->init();
							$form->textBox("Phone Number", "phone", "number", "$phone", array("placeholder='Phone Number'") );
							$form->textBox("Patient Number", "p-number", "number", "$number", array("placeholder='Patient Number'") );							
							$form->close("Access Your Data");
						?>
					</div> 
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
