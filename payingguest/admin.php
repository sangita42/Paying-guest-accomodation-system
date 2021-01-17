<?php
session_start();
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
.btn {
  padding: 30px;
  margin-left:400px;
  font-size: 25px;
  color: black;
    background-color: burlywood;
  
  border: none;
  border-radius: 15px;
}
            .header{
                background-color:beige;
                text-align:center;
                padding: 6px;
                text-decoration-color: chartreuse;
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
             
           
                 <h1> <a href="display.php">Details</a></h1>
        
        </nav>
        
        
            <h2 style="text-align:center; font-size:46px;">Fill the details</h2>
        <form action="detail.php" method="post" enctype="multipart/form-data">
            
            <div class="input-group">
  		
            
            <div class="input-group">
  		<label>PGName</label>
  		<input type="text" name="pgname" placeholder="enter your username" required>
  	</div>
            <div class="input-group">Choose state*
  	<select name="location">
  <option value="howrah">Maharastra</option>
  <option value="saltlake">West Bengal</option>
  <option value="barobazar">Delhi</option>
        <option value="howrah">Karnataka</option>
  <option value="saltlake">Tamil nadu</option>
  
  
</select>
            </div>
             <div class="input-group">Choose city*
  	<select name="city">
  <option value="howrah">kolkata</option>
  <option value="saltlake">mumbai</option>
  <option value="barobazar">Delhi</option>
        <option value="howrah">Bangalore</option>
  <option value="saltlake">Chennai</option>
  
  
  
</select>
            </div>
            
            <div class="input-group">
      Address of PG<textarea
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="address" 
      	placeholder="Enter your address" required></textarea>
  	</div>
       <div class="input-group">Type of pg*  
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
            </div>

             <div class="input-group">
  		<label>No of rooms </label>
  		<input type="number" name="room" placeholder="enter number of room available" required>
  	</div>
             <div class="input-group">
  		<label>No of shared room</label>
  		<input type="number" name="shared" placeholder="enter no of shared room" required>
  	</div>
             <div class="input-group">
  		<label>contact details</label>
  		<input type="text" name="contact" placeholder="enter your contact number" maxlength="10" required>
  	</div>
            
             
             <div class="input-group">
  		<label>Rent per month</label>
  		<input type="text" name="price" placeholder="enter your price" required>
  	</div>
            <div>Facilities
            <div class="input-group">Electricity
                <input type="radio" name="electricity" value="yes" checked>yes<br>
  <input type="radio" name="electricity" value="no"> no<br>
                
            </div>
                <div class="input-group">parking
                <input type="radio" name="parking" value="yes" checked> yes<br>
  <input type="radio" name="parking" value="no"> no<br>
                
            </div>
                <div class="input-group">Refrigerator
                <input type="radio" name="refrigerator" value="yes" checked >yes<br>
  <input type="radio" name="refrigerator" value="no"> no<br>
                
            </div>
                <div class="input-group">Full furnished
                <input type="radio" name="full" value="yes" checked> yes<br>
  <input type="radio" name="full" value="no"> no<br>
                
            </div>
                <div class="input-group">Ac
                <input type="radio" name="ac" value="yes" checked>yes<br>
  <input type="radio" name="ac" value="no"> no<br>
                
            </div>
                <div class="input-group">Balcony
                <input type="radio" name="balcony" value="yes" checked> yes<br>
  <input type="radio" name="balcony" value="no"> no<br>
                
            </div>
                <div class="input-group">Laundry
                <input type="radio" name="laundry" value="yes" checked> yes<br>
  <input type="radio" name="laundry" value="no"> no<br>
                
            </div>
            </div>
           <div class="input-group">
            <input multiple="multiple" name="img[]" type="file" required>
            
            </div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="submit">submit</button>
  	</div>
                
                </form>
    
   
    </body>
</html>


