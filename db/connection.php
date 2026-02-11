<?php
$servername = "sql100.byetcluster.com";   // Your DB Host
$username   = "epiz_xxxxxx";              // Your DB Username
$password   = "YOUR_DB_PASSWORD";         // Your DB Password
$dbname     = "epiz_xxxxxx_food_db";      // Your DB Name

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
