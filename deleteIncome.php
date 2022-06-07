

<?php

require "./db_connect.php";
session_start();
$incomeId = $_GET["incomeId"];
// $deleteOutgoing = "DELETE FROM outgoings WHERE id=$outgoingId AND userId = ".$_SESSION["userId"]."";
//bez sesji - postman
$deleteIncome = "DELETE FROM incomes WHERE id=$incomeId AND userId = 1";
$mysqli->query($deleteIncome);
$response = array("response"=>"incomeDeleted");
echo json_encode($response);


?>