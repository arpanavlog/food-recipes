 <?php

$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="contact_table";



$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die();
// Check connection
if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//echo "<h1>Connected!</h1>";
?>