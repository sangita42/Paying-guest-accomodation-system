<?php
session_start();
$username="";
$email="";
$contact="";
$errors = array();

 $db=mysqli_connect('localhost','root','','gstregister');
if(isset($_POST['reg_user'])){
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
    $contact = mysqli_real_escape_string($db,$_POST['contact']);
    
    if(empty($username)){array_push($errors,"username is required");}
    if(empty($email)){array_push($errors,"email is required");}
    if(empty($password_1)){array_push($errors,"password is required");} 
    if($password_1!=$password_2){
        array_push($errors,"password donot match");
    }
    if(empty($contact)){array_push($errors,"contactnumber is required");}
    
    $user_check_query="SELECT *FROM registration WHERE username ='$username' OR email = '$email' LIMIT 1";
    $result = mysqli_query($db,$user_check_query);
    $user = mysqli_fetch_assoc($result);
     if($user){
         if($user['username']==$username){
             array_push($errors,"user already exists");
         }
         if($email['email']==$email){
             array_push($errors,"email already exists");
         }
     }
    if(count($errors)==0){
        $password=md5($password_1);
        $query = "INSERT INTO registration(username,email,password,contact) VALUES ('$username','$email','$password','$contact')";
        mysqli_query($db,$query);
        $_SESSION['username']=$username;
        
        
        
        $_SESSION['success']="you are now logged in";
        header('location:userlogin.php');
    }
}
if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    
    if(empty($username)){
        array_push($errors,"username is required");
        
        
    }
    if(empty($password)){
        array_push($errors,"password is required");
    }
    if (count($errors) == 0){
        $password=md5($password);
        $query = "SELECT * FROM registration WHERE username = '$username' AND password ='$password'";
        $results = mysqli_query($db,$query);
        if(mysqli_num_rows($results) == 1){
            
            $_SESSION['username']=$username;
            
            
    
            
            $_SESSION['success']="you are now logged in";
            header('location:host.php');
        }
        else{
            array_push($errors,"wrong credentials");
        }
        
        
    }
}
    
    
    
    







?>