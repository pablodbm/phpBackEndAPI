<?php
header('Access-Control-Allow-Origin: *');
require "../db_connect.php";
session_start();
//bez sesji - postman
// $userId = $_SESSION["userId"];
$userId = 2;
$outgoingId = $_GET["outgoingId"];
$deleteOutgoing = "DELETE FROM outgoings WHERE id=$outgoingId AND userId = $userId";
$mysqli->query($deleteOutgoing);
$response = array("response"=>"outgoingDeleted");
echo json_encode($response);

?>