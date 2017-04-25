<?php
include("connectToDatabase.php");

// Getting values from text boxes
$orderId = $_POST["txtOrderID"];
$orderStatus = $_POST['txtOrderStatus'];

// Search whether an order ID actually exists
$selectionQuery = "select salesId from orders where salesId='$orderId'";
$executeQuery = mysqli_query($con,$selectionQuery);
$row = mysqli_fetch_array($executeQuery);		


if($row['salesId'] == $orderId){
	// Exists
	$modifyOrderQuery = "update orders set orderStatus = '$orderStatus' where salesId = '$orderId'";
	$executeModifyOrderQuery = mysqli_query($con,$modifyOrderQuery);
	$rowTotalPrice = mysqli_fetch_array($executeModifyOrderQuery);

	header("Location:modifyOrderSuccess.php");

}else{
	// Not exists
	header("Location:modifyOrderStatusError.php");
}



?>