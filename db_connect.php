<?php


$mysqli = new mysqli($host,$user,$pass,$db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
} else {
}


?>


