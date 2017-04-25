<?php
include("connectToDatabase.php");

// The temporary 'productsDummy' table may have added items to cart
// Since the cart is not Checked out,
// productsDummy table should be replaced with data, from products table
// This ensures the temporary add to cart quantity is performed well after
// the next user's login

// Read data from products, and update to productsDummy
$selectProductsTableQuery = "select productId,availableQty from products";
$resultsProductsTableQuery = mysqli_query($con,$selectProductsTableQuery);

while($row = mysqli_fetch_array($resultsProductsTableQuery))
{

	$productId = $row['productId'];
	$availableQty = $row['availableQty'];

	$updateProducts = "update productsDummy set availableQty='$availableQty' where productId='$productId'";
	$executeUpdateProductsQuery = mysqli_query($con,$updateProducts);

}

// Clear sales table where salesId is 0 (which means un checked out)
$clearSalesTableQuery = "delete from sales where salesId=0";
$executeClearSalesTableQuery = mysqli_query($con,$clearSalesTableQuery);
mysqli_close($con);
session_start();
session_destroy();
header("Location:home.php");

?>