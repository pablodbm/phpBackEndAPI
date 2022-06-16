<?php
header('Access-Control-Allow-Origin: *');
require "../db_connect.php";
$id = $_GET["id"];
$title = $_GET["title"];
$source = $_GET["source"];
$category = $_GET["category"];
$amount = $_GET["amount"];
$userId = $_GET["userId"];
$date = $_GET["date"];
$type = $_GET["type"];

$updateSingle = "UPDATE transactions SET title='$title',source='$source',category='$category',amount=$amount,userId=$userId,date='$date',type='$type' WHERE id=$id";
$mysqli->query($updateSingle);
$response = array("response"=>"updated");
echo json_encode($response);



?>