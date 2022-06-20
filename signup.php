<?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
        //Remote Connection to the database on db_alpsforums
        if($_SERVER['HTTP_HOST'] == "localhost")
        {
        $host_name = "localhost";
        $host_user = "root";
        $host_pass = "avinash@123";
        $host_db = "bmi";

        }
        else
        {
        $host_name = '103.38.50.104';
        $host_user = 'developer';
        $host_pass = 'Inf0g$nx@123456';
        $host_db = "dietplan-phpapp";

        }


    

         $conn = mysqli_connect($host_name, $host_user, $host_pass,$host_db);  
        if(!$conn){  
        die('Could not connect: '.mysqli_connect_error());  
        }  
        echo 'Connected successfully<br/>';  
        

        $username = $_POST['username'];
        $password = $_POST['password'];
        $myname = $_POST['name'];
    //     // echo $username.$name;
           
    //  $sql = "INSERT INTO users (name,age,sex,weight,height,bmivalue)
    //  VALUES ('$name','$age','$sex','$weight','$height','$bmi')";

        $sql =" INSERT INTO bmitables(username,password,email) VALUES ('$myname', '$password','$username')";  
        if(mysqli_query($conn, $sql)){  
        echo "Record inserted successfully";  
        }else{  
        echo "Could $username insert record: ". mysqli_error($conn);  
        }  


        header("Location: login.php");
        
        mysqli_close($conn);  
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form </title>
    <link rel="stylesheet" href="dietscreen2.css">
</head>



<body>
<section>
    <div class="imgbox">
        <img src="diet4.jpg" alt=""  />
       

    </div>
</section>
    
    
      <div class="login-box">
        <h1>Sign Up</h1>
        <form action="" method="post">  
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter Your name" required>
             
            <p>User id</p>
            <input type="email" name="username" placeholder="Enter Your Userid" required>
            
            <p>Password</p>
            <input type="password" name="password" placehoslder="Enter password" required><br>

          
            <!-- <a href="popup.html"> -->
            <!-- <input type="button" name="" value="Sign Up"><br> -->
            <div style="text-align: center;" class="btn1">

                <button type="submit" style="font-size: 16px; border-radius: 5px;border: 2px solid rgb(58, 167, 240);background-color:rgb(58, 167, 240) ;" name="button">Sign Up</button><br>
            </div>
        </a>
            
           
        </form>
        
    
</body>
</html>