<?php
include("connectToDatabase.php");

// Getting values from text boxes
$orderId = $_POST["txtOrderID"];


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
	
	$thisPage="other"; //This is to highlight the current page in red
	include("WebsiteHeader.php");

	echo"<br/><br/><br/><br/><br/><br/>";
	echo"<div class=loginContentDiv>";	

	echo"<div class=logosContainerDiv>";
		echo"<img  width=90 src=Images/Logos/siteLogoDark.png>";
	echo"</div>";

	echo"<h2 style=font-size:200% class=fontBlue>Order Invoice no : ".$orderId ."</h2>";
	echo"<h2 style=font-size:200% class=fontBlue>Order Status : ".$displayOrderStatus ."</h2>";
	echo"<br/>";
	echo"</div>";
	echo"<br/><br/><br/><br/><br/><br/>";

    $pageEditor="senthuran"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php");

echo"</div>";




}else{
	// Not exists
	header("Location:trackOrderNotFound.php");
}



?>