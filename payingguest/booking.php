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
    

    
    $query = "INSERT INTO booking( username, name, pg, age, number,nroom)
            VALUES('$username', '$name', '$pg', '$age', '$number','$nroom')";
    if(mysqli_query($mysqli, $query)){
    echo "success";

   
}
}


mysqli_query($mysqli,"UPDATE test  SET room = (room-'$nroom') WHERE pgname = '$pg' ");
 mysqli_close($mysqli);

  echo "PHP RAN successfully";
if(isset($_POST['submit1'])){
    $query = "DELETE FROM booking where username ='$username'";
    $record=mysqli_query($mysqli, $query);
    
}
mysqli_query($mysqli,"update test SET room =(room+'$nroom') WHERE pgname = '$pg' ");
mysqli_close($mysqli);
echo "booking cancelled";

?>


<html>
    <head>
        <style>
            body{
    background-image: url("http://infocenter.bmm.in/infocenter/NewLogins/New%20Folder%20(3)/page_background.gif");

font-family:Verdana;
font-size:20px;
margin:0;
line-height:20px;

}
            .header{
                background-color:beige;
                text-align:center;
                padding: 6px;
                text-decoration-color: chartreuse;
            }
            .input-group {
  margin: 10px 200px 5px 200px;
  
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
    padding: 7px;
}
/*.input-group input {
  height: 23px;
  width: 83%;
  padding: 5px 9px;
  font-size: 16px;
  border-radius: 50px;
  border: 1px solid gray;
}
            */
            .navbar{
                overflow: hidden;
                background-color: darkkhaki;
            }
            .navbar a{
                float: right;
                color: darkblue;
                padding: 18px 12px;
                display: block;
                font-family: fantasy;
                font-size: 21px;
              
                text-decoration: inherit;
            }
            .topnav a:hover {
  background-color: #ddd;
  color: black;
                
}
        </style>
    </head>
    <body>
        <div class="header">
            <h1>GuestIn</h1>
            
        </div>
         <nav class="navbar">
             
           
                 <h1> <a href="cancelbooking.php">Booking Details</a></h1>
             <h2><a href="host.php">go to main page</a></h2>
        
        </nav>
        <form action ="booking.php" method="post" >
                 <div class="input-group">
  		<label>Your Name</label>
  		<input type="text" name="name" placeholder="enter your username" required>
  	</div>
             <div class="input-group">
  		<label>pg Name</label>
  		<input type="text" name="pg" placeholder="enter your pgname" required>
  	</div>
            
             <div class="input-group">
  		<label>Age</label>
  		<input type="number" name="age" placeholder="enter your age" required>
  	</div>
            
             <div class="input-group">
  		<label>Phone number</label>
  		<input type="text" name="number" placeholder="enter your username" required>
            </div>
  

        
            
               <div class="input-group">
  		<label>No of room</label>
  		<input type="number" name="nroom" placeholder="enter your username" required>
  	</div>
            
              </div>
        <div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="submit">book room</button>
        
        
  	</div>
        </form>
        <button type="submit" class="btn" name="submit1">cancel room</button>
    </body>
</html>