<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$adminname = test_input($_POST["adminname"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM login");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['adminname'] == $adminname) &&
			($user['password'] == $password)) {
				$_SESSION['admin']=$adminname;
				echo "<script language='javascript'>";
				echo "alert('LOGIN AS A ADMIN')";
				echo "</script>";
				header("Location: login.php");
				exit();
		}
		else {
			header("Location: index.php");
			echo "<script language='javascript'>";
			echo "alert('INCORRECT DETAILS')";
			echo "</script>";
			die();
			
		}
	}
}

?>
