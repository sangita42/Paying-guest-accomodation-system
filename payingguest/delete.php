<?php
session_start();
//connect to database
$db= mysqli_connect("localhost", "root","", "gstregister")or die("failed to connect to mysql server".mysqli_connect_error());
$username=$_SESSION['username'];

	if(isset($_GET['del'])) 
{
	$id=$_GET['del'];
	$sql="DELETE FROM test where pgname='$id'";

	
	
	$record=mysqli_query($db, $sql);
	
	header("location: display.php");
}
	
?>