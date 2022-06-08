<?php
header('Access-Control-Allow-Origin: *');

// session_start();
// $userId = $_SESSION["userID"];

$userId = 2;
require "../db_connect.php";

$getOutgoings = "SELECT * FROM `outgoings` WHERE userId = $userId ORDER BY date ASC";
$getIncomes = "SELECT * FROM `incomes` WHERE userId=$userId ORDER BY date ASC";
// echo $getIncomes;

$outgoingsData = $mysqli->query($getOutgoings);
$incomesData = $mysqli->query($getIncomes);


$outgoingsDataFetched = $outgoingsData->fetch_all(MYSQLI_ASSOC);
$incomesDataFetched = $incomesData->fetch_all(MYSQLI_ASSOC);
//dorobic sortowanie po datach
$allData = array_merge($outgoingsDataFetched,$incomesDataFetched);

echo json_encode($allData);

?>