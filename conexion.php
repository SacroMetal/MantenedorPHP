<?php
$servername = "servidorfranciscotomas.mysql.database.azure.com";
$username = "FranciscoTomas@servidorfranciscotomas";
$password = "qTIj1fa9EKMXXasmfYks";
$database = "empresatransporte";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//mysqli_close($conn);

?>



