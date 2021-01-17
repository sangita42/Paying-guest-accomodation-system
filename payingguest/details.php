 <?php
        $username = "root";
$password = "";
$database = "gstregister";
$mysqli = new mysqli("localhost", $username, $password, $database);

$pgname = $mysqli->real_escape_string($_POST['pgname']);
$location = $mysqli->real_escape_string($_POST['location']);
 
$query = "SELECT * FROM test where name = '$name';