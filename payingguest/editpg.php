<?php
session_start();
//connect to database
$db= mysqli_connect("localhost", "root","", "gstregister")or die("failed to connect to mysql server".mysqli_connect_error());
$username=$_SESSION['username'];

if(isset($_GET['edit']))
{
	$id= $_GET['edit'];
$sql="SELECT * FROM test WHERE pgname='$id'";
$record=mysqli_query($db, $sql);
foreach ($record as $res) {
     
	$pgname= $res['pgname'];
	$location = $res['location'];
	$city= $res['city'];
	$address= $res['address'];
	$gender= $res['gender'];
	$room= $res['room'];
	$shared= $res['shared'];
	$contact= $res['contact'];
	$price= $res['price'];
	$electricity= $res['electricity'];
	$parking= $res['parking'];
	$refrigerator= $res['refrigerator'];
	$full= $res['full'];
	$ac=$res['ac'];
	$balcony= $res['balcony'];
	$laundry= $res['laundry'];
	
	
		
}
}
?>
<html>
    <head>
    </head>
    <body>
        <form method="post" action="edit.php">
<table>
		
			<tr>
			<th>PG name : </th>
			<td><?php echo $pgname;?></td>
    </tr>
			<tr>
             <th>PG location  </th>
			<td><input style="color:black;" type="text" name="location" value="<?php echo $location;?>"></td>
						</tr>
			
			
                <tr>
			
			<th>City:  </th>
			<td><input style="color:black;" type="text" name="city" value="<?php echo $city;?>"></td>
			</tr>
            <tr>
			
			<th>Address:  </th>
			<td><input style="color:black;" type="text" name="address" value="<?php echo $address;?>"></td>
			</tr>
    <tr>
			<th>PG for  </th>
			<td><select style="color:black;" name="gender" placeholder="select">
                <input type="radio"  value="male" checked> Male<br>
  <input type="radio"  value="female"> Female<br>
  <input type="radio"  value="other"> Other
			
			</select></td>			</tr>
			
			<tr>
			<th>Number of room :  </th>
			<td><input style="color:black;" type="number" name="room" value="<?php echo $room;?>"></td>
			</tr>
			<tr>
			<th>number of shared room :  </th>
			<td><input style="color:black;" type="number" name="shared" value="<?php echo $shared;?>"></td>
			
			</tr>
			<tr>
			<th>contact:  </th>
			<td><input style="color:black;" type="text" name="contact" value="<?php echo $contact;?>"></td>
			
			</tr>
			
			<tr>
			<th>Price: </th>
			<td><input style="color:black;" type="text" name="price" value="<?php echo $price;?>"></td>
			</tr>
			
			<tr>
			<th>Electricity: </th>
			<td><input style="color:black;" type="text" name="electricity" value="<?php echo $electricity;?>"></td>
			</tr>
			<tr>
			<th>Parking: </th>
			<td><input style="color:black;" type="text" name="parking" value="<?php echo $parking;?>"></td>
			</tr>
			<tr>
			<th>Fully furnished: </th>
			<td><input style="color:black;" type="text" name="full" value="<?php echo $full;?>"></td>
			</tr>
			<tr>
			<th>Refrigerator: </th>
			<td><input style="color:black;" type="text" name="refrigerator" value="<?php echo $refrigerator;?>"></td>
			</tr>
			<tr>
			<th>Air conditioned: </th>
			<td><input style="color:black;" type="text" name="ac" value="<?php echo $ac;?>"></td>
			</tr>
			<tr>
			<th>Balcony: </th>
			<td><input style="color:black;" type="text" name="balcony" value="<?php echo $balcony;?>"></td>
			</tr>
			
			
			<tr>
			<th>Laundry </th>
			<td><input style="color:black;" type="text" name="laundry" value="<?php echo $laundry;?>"></td>
			</tr>
        <tr>
			
		<td><button style="color:black;" type="submit" name="update" class="btn btn-default">Update</button></td>
	</tr>
        
	</table>
    </form>
    </body>
</html>