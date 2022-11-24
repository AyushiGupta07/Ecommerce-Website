<?php
$host="localhost";
$user="root";
$password="";
$db="ecommercewebsite";

$conn=mysqli_connect($host,$user,$password,$db);



if(!$conn){
   die("Sorry");

}
else{
    echo "Successful";
}
// mysqli_select_db($db);




if(isset($_POST['username']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cPassword=$_POST['cPassword'];

    if($cPassword!=$password){
      echo "Password not matched";
      exit();
    }

    $sql="insert into logintable Values ('".$username."','".$password."')";
    $result=mysqli_query($conn,$sql);
    header("Location:index.html");
  }

?>










<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <!-- <style>
        body{
            background-image: url('./sign\ Up\ background');
        } -->
    <!-- </style> -->
       
  </head>
   <link rel="stylesheet" href="signUp.css">
  
  <body>
    <div class="container">
      <img src="sighUp Avatar.jpeg" class="loginAvatar" />
      <h1>Sign up</h1>
      <form action="" method="post">
        <p>Username</p>
        <input type="text" name="username" placeholder="Enter Username" />
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password" />
        <p>Confirm Password</p>
        <input type="password" name="cPassword" placeholder="Enter  confirm Password" />
        <input type="submit" name="" value="Sign Up" />

        <a href="https://ayushigupta07.github.io/Ecommerce-Website/login.html">Login</a
        >
      </form>
    </div>
  </body>
</html>
