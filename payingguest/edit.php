<?php
session_start();
//connect to database
$db= mysqli_connect("localhost", "root","", "gstregister")or die("failed to connect to mysql server".mysqli_connect_error());
$username=$_SESSION['username'];


if(isset($_POST['update']))
{    
	$pgname= mysqli_real_escape_string($db, $_POST['pgname']);
	$location= mysqli_real_escape_string($db, $_POST['location']);
	$city= mysqli_real_escape_string($db, $_POST['city']);
	$address= mysqli_real_escape_string($db, $_POST['address']);
	$gender= mysqli_real_escape_string($db, $_POST['gender']);
	$room= mysqli_real_escape_string($db, $_POST['room']);
	$shared= mysqli_real_escape_string($db, $_POST['shared']);
	$contact= mysqli_real_escape_string($db, $_POST['contact']);
	$price= mysqli_real_escape_string($db, $_POST['price']);

	$electricity= mysqli_real_escape_string($db, $_POST['electricity']);
	$parking= mysqli_real_escape_string($db, $_POST['parking']);
	
	$refrigerator= mysqli_real_escape_string($db, $_POST['refrigerator']);
	$full= mysqli_real_escape_string($db, $_POST['full']);
	$ac= mysqli_real_escape_string($db, $_POST['ac']);
	$balcony= mysqli_real_escape_string($db, $_POST['balcony']);
	$laundry= mysqli_real_escape_string($db, $_POST['laundry']);

	
	
	
		  
               //updating the table
			  
        
        $sql="UPDATE test SET location='$location', city='$city', address='$address', gender='$gender', room='$room', shared='$shared', contact='$contact', price='$price', electricity='$electricity', parking='$parking', refrigerator='$refrigerator', full='$full', ac='$ac', balcony='$balcony', laundry='$laundry'";
		if(!mysqli_query($db, $sql))
		{
			echo "error".mysqli_error($db);
		}
		else{
        //redirectig to the display page. In our case, it is index.php
        header("Location: display.php");
    }
}
?>