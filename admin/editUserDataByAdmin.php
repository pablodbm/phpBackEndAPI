<?php
header('Access-Control-Allow-Origin: *');
require "../db_connect.php";

$login = mysqli_real_escape_string($mysqli,$_GET["login"]);
$name = mysqli_real_escape_string($mysqli,$_GET["name"]);
$surname = mysqli_real_escape_string($mysqli,$_GET["surname"]);
$email = mysqli_real_escape_string($mysqli,$_GET["email"]);
$active = mysqli_real_escape_string($mysqli,$_GET["active"]);
$userType = mysqli_real_escape_string($mysqli,$_GET["userType"]);
$userId = mysqli_real_escape_string($mysqli,$_GET["userId"]);

$updateUserData = "UPDATE users SET login='$login',name='$name',surname='$surname',email='$email',active=$active,userType='$userType' WHERE id=$userId";
$mysqli->query($updateUserData);
echo $updateUserData;
$responseArray = array("response"=>"dateChanged");
echo json_encode($responseArray);