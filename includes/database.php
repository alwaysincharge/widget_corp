<?php session_start();   ?>


<?php 

function redirect_to($new_location)  {
    header("Location: " . $new_location);  exit;
}

?>


<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "widget_corp";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);



if (mysqli_connect_errno()) {
    echo "Your database probably has a syntax error!";
    
}



$query = "SELECT * FROM subjects";

$result = mysqli_query($connection, $query);




?>
