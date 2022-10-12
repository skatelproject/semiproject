<?php

$conn = "";

try {
	$server = "localhost";
	$dbname = "biodata_omegaproject";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$server; dbname=biodata_omegaproject",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>