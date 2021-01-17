<?php
session_start();
//connect to database
$db= mysqli_connect("localhost", "root","", "gstregister")or die("failed to connect to mysql server".mysqli_connect_error());
$username=$_SESSION['username'];

	
	//$sql="UPDATE host SET name='$name',type='$type', num='$num', pbv='$pbv',rsp='$rsp',area='$area', town='$town', stateslist='$stateslist', pic='$pic', rent='$rent', rtype='$rtype', avail='$avail', ele='$ele', park='$park', fur='$fur',ref='$ref', ac='$ac', bal='$bal', tab='$tab', laun='$laun', tv='$tv', secure= '$secure', gey='$gey', meal='$meal', bath='$bath', priroom='$priroom', sroom='$sroom' WHERE phone='$phone' AND username='$username'";

	$sql= "SELECT * FROM test WHERE username='$username'";
	$record=mysqli_query($db, $sql);
	
?>

<html>
    <head>
        <style>
             .header{
                background-color:beige;
                text-align:center;
                padding: 6px;
                text-decoration-color: chartreuse;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>GuestIn</h1>
            
        </div>
        <div>
            <h2> <a href="host.php">Go to main page</a></h2>
        </div>
    <table>
		
		
	<?php
	$recordcheck= mysqli_num_rows($record);
	if($recordcheck>0)
	{
		
		while($row = mysqli_fetch_assoc($record))
			
		{	echo "<tr>";
			echo"<th></th>";
			echo"<td></td>";
			echo"<td> <a href='delete.php?del=$row[pgname]'>delete</a> </td>";
			echo"<td> <a href='editpg.php?edit=$row[pgname]'>edit</a> </td>";
			echo "</tr>";
			echo "<tr>";
			echo"<th> PG NAME :  </th>";
			echo"<td>".$row['pgname']."</td>";
         echo"<th> PG location :  </th>";
			echo"<td>".$row['location']."</td>";
        
			
			echo "</tr>";	
			echo "<tr>";
			
			
			
		}
	}
	?>

</table>
    </body>
</html>