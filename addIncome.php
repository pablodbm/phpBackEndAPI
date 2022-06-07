<?php
require "./db_connect.php";
session_start();

$title = mysqli_real_escape_string($mysqli,$_GET["title"]);
$source = mysqli_real_escape_string($mysqli,$_GET["source"]);
$category = mysqli_real_escape_string($mysqli,$_GET["category"]);
$type = mysqli_real_escape_string($mysqli,$_GET["type"]);
$amount = mysqli_real_escape_string($mysqli,$_GET["amount"]);
//z poziomu php dodajemy date wplywu oraz z sesji userid
$date = date('Y-m-d H:i:s');
//ogarnac czemu sekundy nie wchodza do sql
// $userId = $_SESSION["userId"];
$userId = 1;
$addIncome = "INSERT INTO incomes (title,source,category,type,amount,userId,date) VALUES ('$title','$source','$category','$type',$amount,$userId,'$date')";
$mysqli->query($addIncome);
$response = array("response"=>"incomeAdd");
echo json_encode($response);
// echo $addIncome;
?>