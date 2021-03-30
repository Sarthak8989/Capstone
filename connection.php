<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "sarthak";
	$username = "root";
	$password = "root";

	$conn = new PDO(
		"mysql:host=$servername; dbname=sarthak",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
