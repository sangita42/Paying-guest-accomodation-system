<?php
session_start();
if(!isset($_SESSION['username'])){
    $_SESSION['msg']="you must login first";
    header('location:userlogin.php');
    
}
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }


?>

<html>
    <head>
        <style>
            body{
                background-image: url(" ")
            }
            .header{
                background-color:beige;
                text-align:center;
                padding: 6px;
                text-decoration-color: chartreuse;
            }
            .reg{
                
                margin-left: 1000px;
                margin-top: 0px;
                
                font-family: fantasy;
                font-style: normal;
                font-size: 18px;
                animation: flow;
            }
            .reg1{
                margin-top:0px;
                margin-left: 1200px;
            }
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
             <a href="host.php?logout='1'" style="color: red;">logout</a>
           
             <a>Welcome <strong><?php echo $_SESSION['username']; ?></a>
    	
           
                 <a href="admin.php" >Become a Host</a>
        
        </nav>
        
        
        <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	
    <?php endif ?>
	</div>
       
        <?php
        $username = "root";
$password = "";
$database = "gstregister";
$mysqli = new mysqli("localhost", $username, $password, $database);
 
$query = "SELECT * FROM test";
echo "<b> <center>PAYING GUEST</center> </b> <br> <br>";
            




 
echo '<table border="2" cellspacing="2" cellpadding="2" width="100%" text-align="left" color="green"> 
 
      <tr> 
          <td> <font face="Arial">Picture</font> </td> 
          <td> <font face="Arial">PG name </font> </td>
          <td> <font face="Arial">Location </font> </td>
          <td> <font face="Arial">city</font> </td> 
          <td> <font face="Arial">Address </font> </td>
          <td> <font face="Arial">PG FOR </font> </td>
          
          
          <td> <font face="Arial">Availability of rooms </font> </td>
          <td> <font face="Arial">Contact Number</font> </td> 
          <td> <font face="Arial">Price </font> </td>
          <td> <font face="Arial">Electricity </font> </td>
          <td> <font face="Arial">Parking</font> </td> 
          <td> <font face="Arial">Refrigerator </font> </td>
          <td> <font face="Arial">AC</font> </td>
          <td> <font face="Arial">Balcony</font> </td> 
          <td> <font face="Arial">Laundry </font> </td>
          
          
          
          <td> <font face="Arial">Book</font> </td>
          
          
          
          
          
         
      </tr>';
            
 
if ($result = $mysqli->query($query)) {
 
    while ($row = $result->fetch_assoc()) {
        $displ = $row['image'];
        $pgname = $row["pgname"];
        $location = $row["location"];
        $city = $row["city"];
        $address = $row["address"];
        $gender = $row["gender"];
        $room = $row["room"];
        $contact = $row["contact"];
        $price= $row["price"];
        $electricity = $row["electricity"];
        $parking = $row["parking"];
        $refrigerator = $row["refrigerator"];
        $ac= $row["ac"];
        $balcony= $row["balcony"];
        $laundry= $row["laundry"];
        
        
          
          
       
        
       echo '<tr>
      
              
         <td><img src="data:image/jpeg;base64,'.base64_encode($displ).'"width="240" height="240" /></td>
          <td>'.$pgname.'</td>
         <td>'.$location.'</td>
         <td>'.$city.'</td>
         <td>'.$address.'</td>
         <td>'.$gender.'</td>
         <td>'.$room.'</td>
         <td>'.$contact.'</td>
         <td>'.$price.'</td>
         <td>'.$electricity.'</td>
         <td>'.$parking.'</td>
         <td>'.$refrigerator.'</td>
         <td>'.$ac.'</td>
         <td>'.$balcony.'</td>
         <td>'.$laundry.'</td>
         
         
         
         <td><a href="booking.php">click here</a></td>
      
      </tr>';
        
    }
}

/*freeresultset*/
$result->free();
    
        ?>
        
  
    </body>
    
</html>
    