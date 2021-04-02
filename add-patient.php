<?php 
require_once "importance.php"; 

if(!User::loggedIn()){
	Config::redir("login.php"); 
}
?> 

<html>
<head>
	<title>Add Patients</title>
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
					Add Patient <small>New patient? Add them here</small>
				</div>
				<?php require_once "include/alert.php";  ?> 
				<div class='content-body'>
					<div class='form-holder' style='margin-top: 30px;'>
					    <div class='badge-header'>Patient Details</div> 
						
							<?php
						
						if(isset($_GET['p-number'])){
							$patientNumber = $_GET['p-number'];
							echo "<h3>Patient Number: $patientNumber</h3>";
							
							$name = $_GET['name'];
							$location = $_GET['location'];
							$gender = $_GET['gender'];
							$phone = $_GET['phone'];
							$dateOfBirth = $_GET['dateOfBirth'];
							
							$dataBirth = explode("-", $dateOfBirth);
							
							$dateOfBirth = preg_replace("#[^0-9-]#", "", $dataBirth[2]."-".$dataBirth[1]."-".$dataBirth[0]);
							
							$diagnosis = "";
							
						} else {
							$patientNumber = substr(preg_replace("#[^0-9]#", "", md5(uniqid().time())), 0, 4);
							echo "<h3 style='color: #EF3235;'>Patient Number: <strong>$patientNumber</strong></h3>";
							$name = "";
							$location = "";
							$age = "";
							$gender = "";
							$phone = "";
							$dateOfBirth = "";
							$diagnosis = "";
							$condition = "";
						}
						
						
						
						
						if(isset($_POST['p-name'])){
							$name = $_POST['p-name'];
							$location = $_POST['p-location']; 
							$age = $_POST['p-age']; 
							$phone = $_POST['p-phone'];
							$dateOfBirth = $_POST['p-birth'];
							$diagnosis = $_POST['p-diagnosis']; 
							$gender = $_POST['gender']; 
							
							Patient::add($name, $location, $age, $gender, $phone, $dateOfBirth, $diagnosis, User::getToken(), $patientNumber); 
						}
						
						$form = new Form(3, "post");
						$form->init(); 
						$form->textBox("Full Name", "p-name", "text",  "$name", ""); 
						$form->textBox("Location", "p-location", "text",  "$location", "");
						$form->textBox("Age", "p-age", "number",  "$age", ""); 
						$form->textBox("Phone", "p-phone", "number",  "$phone", "");
						$form->textBox("Date of Birth", "p-birth", "date", "$dateOfBirth", "");	
						$form->textarea("Diagnosis/ Symptoms", "p-diagnosis", "$diagnosis");
						$form->select("Gender", "gender", "$gender", array("Male", "Female", "Other") );
						$form->close("Submit"); 
						
						
						?>
					</div> 
				</div><!-- end of the content area --> 
				</div> 
				
			</div><!-- col-md-7 -->
				
		</div> 
	</div> 
</body>
</html>
