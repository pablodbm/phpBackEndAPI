<?php
header('Access-Control-Allow-Origin: *');

// session_start();
// $userId = $_SESSION["userID"];

$userId = 2;
require "../db_connect.php";

// $getOutgoings = "SELECT * FROM `outgoings` WHERE userId = $userId ORDER BY date ASC";
// $getIncomes = "SELECT * FROM `incomes` WHERE userId=$userId ORDER BY date ASC";

$getAllTransaction = "SELECT * FROM transactions WHERE userId=$userId ORDER BY date ASC";
// echo $getIncomes;

// $outgoingsData = $mysqli->query($getOutgoings);
// $incomesData = $mysqli->query($getIncomes);

$allTransactions = $mysqli->query($getAllTransaction);


// $outgoingsDataFetched = $outgoingsData->fetch_all(MYSQLI_ASSOC);
// $incomesDataFetched = $incomesData->fetch_all(MYSQLI_ASSOC);
//dorobic sortowanie po datach
$allTransactions = $allTransactions->fetch_all(MYSQLI_ASSOC);

echo json_encode($allTransactions);

?>