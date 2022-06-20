<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $age = $_POST['age'];
     $sex = $_POST['sex'];
     $weight = $_POST['weight'];
     $height = $_POST['height'];
     $bmi= ($weight*10000)/($height*$height);

     
     $sql = "INSERT INTO users (name,age,sex,weight,height,bmivalue)
     VALUES ('$name','$age','$sex','$weight','$height','$bmi')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dietpaln</title>
    <link rel="stylesheet" href="result.css">
</head>

<body>

    <ul class="navbar">
        <li >
            <div class="homebtn">
                <a href="login.php">
                    <input type="button" name="" value="Home"><br>
                </a>
            </div>
        </li>
        <li>
            <div class="homebtn">
                <a href="questionire.php">
                    <input type="button" name="" value="Back"><br>
                </a>
            </div>
        </li>
    </ul>


    <h1>Your BMI Report</h1>



    
    <table>
        <tr>
            <!-- Table Heading -->
            <th>Name</th>
            <th>Age</th>
            <th>height</th>
            <th>weight</th>
            <th>Sex</th>
            <th>BMI Value</th>
            <th>BMI Category</th>
        </tr>
       <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name,age,sex,weight,height,bmivalue FROM users ";
$result = $conn->query($sql);




      if($result->num_rows == 0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while($row = $result->fetch_assoc() ){
          echo "<tr><td>{$row['name']}</td><td>{$row['age']}</td><td>{$row['height']}</td><td>{$row['weight']}</td><td>{$row['sex']}</td><td>{$row['bmivalue']}</td></tr>\n";
        }
      }
$conn->close();

    ?>

    </table>
    <br><br>

    <!-- recommended diet two  -->

    <h2>Your Recommended Diet.</h2> 
    <table>
        <tr>
            <th>DAYS</th>
            <th>BREAKFAST</th>
            <th>LUNCH</th>
            <th>DINNER</th>
        </tr>
        <tr>
            <td>Day 1</td>
            <td id="one.1">one.1</td>
            <td id="one.2">one.2</td>
            <td id="one.3">one.3</td>


        </tr>
        <tr>
            <td>Day 2</td>
            <td id="two.1">two.1</td>
            <td id="two.2">two.2</td>
            <td id="two.3">two.3</td>

        </tr>
        <tr>
            <td>Day 3</td>
            <td id="three.1">three.1</td>
            <td id="three.2">three.2</td>
            <td id="three.3">three.3</td>

        </tr>
        <tr>
            <td>Day 4</td>
            <td id="four.1">four.1</td>
            <td id="four.2">four.2</td>
            <td id="four.3">four.3</td>

        </tr>
        <tr>
            <td>Day 5</td>
            <td id="five.1">five.1</td>
            <td id="five.2">five.2</td>
            <td id="five.3">five.3</td>

        </tr>
        <tr>
            <td>Day 6</td>
            <td id="six.1">six.1</td>
            <td id="six.2">six.2</td>
            <td id="six.3">six.3</td>

        </tr>
        <tr>
            <td>Day 7</td>
            <td id="seven.1">seven.1</td>
            <td id="seven.2">seven.2</td>
            <td id="seven.3">seven.3</td>

        </tr>
    </table>
   <!-- <div class="back-btn">
        <a href="questionire.html">
            <input type="button" name="" value="Back"><br>
        </a>

    </div>  -->

    <!-- <script src="js/page3.js"></script> -->
</body>

</html>