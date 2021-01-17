<?php include('server.php')?>

<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  body{
background-image: url("http://i.huffpost.com/gen/1931502/images/o-WOMAN-WRITING-LETTER-facebook.jpg");
font-family:Verdana;
font-size:20px;
margin:0;
line-height:20px;
      

}
      .input-group {
  margin: 10px 200px 10px 200px;
  
}

   .input-group label {
  display: block;
  text-align: left;
  margin: 3px;
    padding:12px;
}
      

      


      
      .input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  margin-left:450px;
  font-size: 25px;
  color: black;
  border: none;
  border-radius: 5px;
}
.header{
	  text-align:left;
width:100%;
background:darkcyan;
padding:18px;
  }
  </style>
</head>
<body>
 
  <div class="header1">
  	<h2 style="font-size:45px; color:brown; text-align:center;">Login</h2>
  </div>
  <form method="post" action="userlogin.php">
      <?php include('errors.php')?>
  	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="enter your username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="enter your password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p style="font-size:30px;">
  		Not yet a member? <a href="userregistration.php">Sign up</a>
  	</p>
  </form>
</body>
</html>