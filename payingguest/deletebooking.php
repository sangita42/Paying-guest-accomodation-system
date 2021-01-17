<?php
session_start();
//connect to database
$db= mysqli_connect("localhost", "root","", "gstregister")or die("failed to connect to mysql server".mysqli_connect_error());
$username=$_SESSION['username'];


	if(isset($_GET['del'])) 
{
	$id=$_GET['del'];
	$sql="DELETE FROM booking where name='$id'";

	
	
	$record=mysqli_query($db, $sql);
	
	
}
mysqli_query($db,"UPDATE test  SET room = (room +'$nroom') WHERE pgname = '$pg' ");
 mysqli_close($db);
	
?>
<html>
    <head>
    </head>
    <body>
    
        <div>
  	<div class="input-group">
        
  		<button type="submit" class="btn" name="submit">cancel room</button>
  	</div>
		
		
	

 
    </body>
</html>