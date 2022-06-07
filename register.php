<?php
require "./db_connect.php";

$login = mysqli_real_escape_string($mysqli,$_GET["login"]);
$name = mysqli_real_escape_string($mysqli,$_GET["name"]);
$surname = mysqli_real_escape_string($mysqli,$_GET["surname"]);
$email = mysqli_real_escape_string($mysqli,$_GET["email"]);
$birthday = mysqli_real_escape_string($mysqli,$_GET["birthday"]);
$password = md5(mysqli_real_escape_string($mysqli,$_GET["password"]));

$validateEmail = "SELECT * FROM users WHERE email='$email'";
$validateLogin = "SELECT * FROM users WHERE login='$login'";


$validateEmailResult = $mysqli->query($validateEmail);
$validateLoginResult = $mysqli->query($validateLogin);

$response = array();
if($validateEmailResult->num_rows==0 && $validateLoginResult->num_rows==0 ){
    $addUserToDb = "INSERT INTO users (login,name,surname,email,birthday,password) VALUES( '$login','$name','$surname','$email','$birthday','$password')";
    $mysqli->query($addUserToDb);
    $response["response"] = "correctRegister";
}else{
    $response["response"] = "incorrectRegister";
}
echo json_encode($response);



?>