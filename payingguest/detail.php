<?php
session_start();
 
$username = "root";
$password = "";
$database = "gstregister";
 
$mysqli = new mysqli("localhost", $username, $password, $database);


 
 
// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.
 



$username = $_SESSION['username'];

    $pgname = $mysqli->real_escape_string($_POST['pgname']);
$address = $mysqli->real_escape_string($_POST['address']);
$location = $mysqli->real_escape_string($_POST['location']);
$city = $mysqli->real_escape_string($_POST['city']);

$gender = $mysqli->real_escape_string($_POST['gender']);
$room = $mysqli->real_escape_string($_POST['room']);
$shared = $mysqli->real_escape_string($_POST['shared']);
$contact = $mysqli->real_escape_string($_POST['contact']);
$price = $mysqli->real_escape_string($_POST['price']);
$electricity = $mysqli->real_escape_string($_POST['electricity']);
$parking = $mysqli->real_escape_string($_POST['parking']);
$refrigerator = $mysqli->real_escape_string($_POST['refrigerator']);
$full = $mysqli->real_escape_string($_POST['full']);
$ac = $mysqli->real_escape_string($_POST['ac']);
$balcony = $mysqli->real_escape_string($_POST['balcony']);  
$laundry = $mysqli->real_escape_string($_POST['laundry']);


$filename = $_FILES['img']['name'];
$file_tmp = $_FILES['img']['tmp_name'];
$filetype = $_FILES['img']['type'];
$filesize = $_FILES['img']['size'];

if(isset($_POST['submit'])){

    
for($i=0; $i<=count($file_tmp); $i++){
if(!empty($file_tmp[$i])){
$name = addslashes($filename[$i]);
$temp = addslashes(file_get_contents($file_tmp[$i]));

    $query = "INSERT INTO test( username, name, image, pgname, address, location, city, gender, room, shared, contact, price, electricity, parking, refrigerator, full, ac, balcony, laundry)
            VALUES('$username', '$name', '$temp', '$pgname', '$address', '$location','$city', '$gender', '$room', '$shared', '$contact', '$price','$electricity', '$parking', '$refrigerator', '$full', '$ac','$balcony', '$laundry')";
 
if(mysqli_query($mysqli, $query)){
    echo "success";

   
}
}}




}
  


?>
<html>
    <head>
    </head>
    <body>
        <h1><a href="display.php">view result</a></h1>
    </body>
</html>




