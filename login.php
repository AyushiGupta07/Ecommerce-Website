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




if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from logintable where User='".$username."'AND Password='".$password."'
    limit 1";
     
    $result=mysqli_query($conn,$sql);
    if(($result)){
        $row= mysqli_num_rows($result);
        if($row)
          header("Location:index.html");
          else
          echo" You Have entered Incorrect password";
           
        exit();
    }
    else{
        echo" You Have entered Incorrect password";
        exit();
    }
}

?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<link rel="stylesheet" type="text/css" href="login.css">
<body>
  <div class="container">
    <img src="download.jpeg" class="avatar">
<h1>Login here</h1>
<form action="" method="post">
    <p>Username</p>

    <input type="text" name="username" placeholder="Enter Username">
    <p>Password</p>
<input type="password" name="password" placeholder="Enter Password">
<input type="submit" name="" value="login">
<!-- <a href="#">Forget Password?</a><br> -->
<a href="signUp.php">Sign Up?</a>


</form>  
</div>


</body>
</html>