

<?php
header('Access-Control-Allow-Origin: *');
require "../db_connect.php";
session_start();
//bez sesji - postman
// $userId = $_SESSION["userId"];
$userId = 2;
$incomeId = $_GET["incomeId"];
// $deleteOutgoing = "DELETE FROM outgoings WHERE id=$outgoingId AND userId = ".$_SESSION["userId"]."";
$deleteIncome = "DELETE FROM transactions WHERE id=$incomeId AND userId = $userId AND type='income'";
$mysqli->query($deleteIncome);
$response = array("response"=>"incomeDeleted");
echo json_encode($response);


?>