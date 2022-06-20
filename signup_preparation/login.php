
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