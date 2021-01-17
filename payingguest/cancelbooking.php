
<?php
session_start();
 
$username = "root";
$password = "";
$database = "gstregister";
 
$mysqli = new mysqli("localhost", $username, $password, $database);


 
 
// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.
 



$username = $_SESSION['username'];

    $name = $mysqli->real_escape_string($_POST['name']);
$pg = $mysqli->real_escape_string($_POST['pg']);
$age = $mysqli->real_escape_string($_POST['age']);
$number= $mysqli->real_escape_string($_POST['number']);
$nroom= $mysqli->real_escape_string($_POST['nroom']);






if(isset($_POST['submit'])){
    
    $sql="DELETE FROM booking where username ='$username'";

	
	
	$record=mysqli_query($mysqli, $sql);

    
   



mysqli_query($mysqli,"UPDATE test  SET room = (room+'$nroom') WHERE pgname = '$pg' ");
 mysqli_close($mysqli);

  echo "PHP RAN successfully"; 

}
?>

<html>
    <head>
    </head>
    <body>
    
        <div>
  	<div class="input-group">
        <form method="post" action="cancelbooking.php">
        
  		<button type="submit" class="btn" name="submit">cancel room</button>
        </form>
  	</div>
		
		
	

 
    </body>
</html>