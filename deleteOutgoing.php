<?php

require "./db_connect.php";
session_start();
$outgoingId = $_GET["outgoingId"];
// $deleteOutgoing = "DELETE FROM outgoings WHERE id=$outgoingId AND userId = ".$_SESSION["userId"]."";
//bez sesji - postman
$deleteOutgoing = "DELETE FROM outgoings WHERE id=$outgoingId AND userId = 1";
$mysqli->query($deleteOutgoing);
$response = array("response"=>"outgoingDeleted");
echo json_encode($response);

?>