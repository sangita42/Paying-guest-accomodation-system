<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
<title>User Registration form</title>
<link href="main.css" rel="stylesheet" type="text/css">
<style>
body{
    background-image: url("http://infocenter.bmm.in/infocenter/NewLogins/New%20Folder%20(3)/page_background.gif");
    

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
  padding: 30px;
  margin-left:400px;
  font-size: 25px;
  color: black;
    background-color: burlywood;
  
  border: none;
  border-radius: 15px;
}
.header{
	  text-align:left;
width:100%;
background:darkcyan;
padding:18px;
  }9
	
</style>
</head>
<body>
 
</div>
<h2 style="text-align:center; font-size:46px;">Register yourself</h2>
<form method="post" action="userregistration.php">
    <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="enter your user name" value="<?php echo $username?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="enter your email address" value="<?php echo $email?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="enter your password" required>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" placeholder="enter confirm password" required>
  	</div>
	
	
	
	<div class="input-group">
  	  <label>Contact number</label>
  	  <input type="numbers" name="contact" placeholder="enter your contact number"  maxlength="10" value="<?php echo $contact?>" required>
  	</div>
	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p style="font-size:23px; font-color:white;">

  		Already a member? <a href="userlogin.php">Sign in</a>
  	</p>
  </form>
</body>
</html>