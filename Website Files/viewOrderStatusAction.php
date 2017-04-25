<?php
include("connectToDatabase.php");

// Getting values from text boxes
$orderId = $_POST["txtOrderID"];
$orderStatus = $_POST["txtOrderStatus"];

// Search whether an order ID actually exists
$selectionQuery = "select salesId from orders where salesId='$orderId'";
$executeQuery = mysqli_query($con,$selectionQuery);
$row = mysqli_fetch_array($executeQuery);		


if($row['salesId'] == $orderId){
	// Exists
	$selectOrderQuery = "select orderStatus from orders where salesId = '$orderId'";
	$executeSelectOrderQuery = mysqli_query($con,$selectOrderQuery);
	$rowSelectOrder = mysqli_fetch_array($executeSelectOrderQuery);
	$displayOrderStatus = $rowSelectOrder['orderStatus'];

	header("Location:modifyOrderSuccess.php");

}else{
	// Not exists
	header("Location:modifyOrderStatusError.php");
}



?>