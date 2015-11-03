<?php
// Is localhost?
if(substr($_SERVER['DOCUMENT_ROOT'],1,3) == 'opt') {
	$servername = "localhost";
	$username = "root";
	$password = "";
} else {
	$servername = "localhost";
	$username = "fplaneta_fplanet";
	$password = "gatoleon10.";
}

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (!$conn->set_charset("utf8")) {

    exit();
}
$conn->select_db("fplaneta_fplaneta");
if ($result = $conn->query("SELECT DATABASE()")) {
    $result->close();
}
?>
