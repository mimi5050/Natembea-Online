<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$dbname = "natembea_online";


// Create connection
$conn = new mysqli($servername, $username, "", $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo " "; 
?>


