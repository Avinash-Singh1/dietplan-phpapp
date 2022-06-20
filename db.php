<?php ob_start();error_reporting(0);
//Remote Connection to the database on db_alpsforums
if($_SERVER['HTTP_HOST'] == "localhost")
{
 $host_name = "localhost";
 $host_user = "root";
 $host_pass = "avinash@123";
 $host_db = "my_db";

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
/* mysql connect*/
 /*
$connect=mysql_connect($host_name,$host_user,$host_pass) or die("Could Not Connect to Data Base".mysql_error());
$db=mysql_select_db($host_db)or die("Could Not Select Data Base".mysql_error());*/
 ?>