<?php   


if($_SERVER['REQUEST_METHOD']=="POST")
{

    include('config.php');  
    $username = trim($_POST['username']);  
    $password = trim($_POST['password']);  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from bmitables where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            
            header("location: questionire.php?message=logged in successfully");


        }  
        else{  
            echo '<script>alert("Invalid credentials")</script>';
            

        }  
        // if($flag)
        // {
        //     header("location: questionire.html");
        // }
        
    }  

    
?>  

<!-- <?php
   if($flag)
   {
       header("location: questionire.php");
       echo '<script>alert("Welcome to Geeks for Geeks")</script>';

   }
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form </title>
    <link rel="stylesheet" href="dietscreen1.css">
</head>



<body>
<section>
    <div class="imgbox">
        <img src="diet3.jpg" alt=""  />
       

    </div>
</section>
    
    
      <div class="login-box">
        <h1>Sign In</h1>
        <form action="questionire.php" method="post">
            <p>User name</p>
            <input id="email" type="email" name="username" placeholder="Enter Your UserName">
            
            <p>Password</p>
            <input id="pass" type="password" name="password" placeholder="Enter password"><br>
            <div class="sign">
            <!-- <a href="questionire.html"> -->
            
            <input type="submit"  name="" value="Sign In"><br>
        
             <!-- </a> -->
</div>
            <div class="dont">
            <a href="signup.php">Don't have an Account?</a>
        </div>
        </form>
        
    </div>
    <!-- <script src="js/login.js"></script> -->
</body>
</html>