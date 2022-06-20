<?php

// include_once 'db.php';


// Create connection
// if($_SERVER['REQUEST_METHOD'] == "POST"){
// include_once 'db.php';
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
$conn = new mysqli($host_name, $host_user, $host_pass, $host_db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
    echo "sucessfull";
}

    // $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        echo "sucessfull2";
    }
    
    
        //  $name = $_POST['name'];
    // $sql = "SELECT * FROM users where name='$name'";
    // $sql = "SELECT * FROM dietplan ";
    $sql = "SELECT * FROM dietplan ";
    $result = $conn->query($sql);
          if($result->num_rows == 0 ){
            echo '<tr><td colspan="4">No Rows Returned</td></tr>';
          }else{
            while($row = $result->fetch_assoc() ){
              echo "<tr><td>{$row['Days']}</td><td>{$row['Breakfast']}</td><td>{$row['Lunch']}</td><td>{$row['Dinner']}/tr>\n";
            }
}
mysqli_close($conn);

// $conn->close();

    ?>