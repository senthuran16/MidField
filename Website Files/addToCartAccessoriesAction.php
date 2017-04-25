<?php

echo "<link rel=stylesheet type=text/css href=Style.css>";

/*Establishes connection to database*/
include("connectToDatabase.php");

// Accessories Page //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// PA001 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

// The product which is going to be referred
$productReference = "PA001";

$productRQty = $_POST["pa001Qty"]; // Requested Qty got from form

// Queries to load data from table
$productQuery = "select availableQty,productName,productPrice from productsDummy where productId='$productReference'";
$productExecute = mysqli_query($con,$productQuery);
$productRow = mysqli_fetch_array($productExecute);

// Creating variables to store this product's details
$productProductName = $productRow['productName'];
$productPrice = $productRow['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["pa001Qty"]=="")){
	// If field is not left blank
	if(!($_POST["pa001Qty"]<=0)){

		if($productRow['availableQty'] >= $productRQty){
			//Available
			$productQty = $productRQty; // Final Qty is calculated (in a new variable)
			// Update Sales Table
			$updateProductQuery = "insert into sales values ('','$productReference','$productProductName','$productQty','$productPrice')";
			$executeUpdateProductQuery = mysqli_query($con,$updateProductQuery);
			
			// Calculating the new available qty
			$newAvailableQty = $productRow['availableQty'] - $productRQty;

			// Should update the new quantity of the product
			$updateQuantityQuery = "update productsDummy set availableQty='$newAvailableQty' where productId='$productReference'";
			$executeUpdateQuantityQuery = mysqli_query($con,$updateQuantityQuery);

			header("Location:addToCartSuccess.php");
		}else{
			$productQty=0; // Final Qty is ZERO
			// Redirects to Qty Overflow error page
			header("Location:productQtyOverflow.php");
		}

	}else{
		// If negative quantity is input
		//invalid
		header("Location:productQtyOverflow.php");
	}	
}

// PA001 ///////////////////////////////////////////////////////////////////////////////////////////////////


// PA002 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

// The product which is going to be referred
$productReference = "PA002";

$productRQty = $_POST["pa002Qty"]; // Requested Qty got from form

// Queries to load data from table
$productQuery = "select availableQty,productName,productPrice from productsDummy where productId='$productReference'";
$productExecute = mysqli_query($con,$productQuery);
$productRow = mysqli_fetch_array($productExecute);

// Creating variables to store this product's details
$productProductName = $productRow['productName'];
$productPrice = $productRow['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["pa002Qty"]=="")){
	// If field is not left blank
	if(!($_POST["pa002Qty"]<=0)){

		if($productRow['availableQty'] >= $productRQty){
			//Available
			$productQty = $productRQty; // Final Qty is calculated (in a new variable)
			// Update Sales Table
			$updateProductQuery = "insert into sales values ('','$productReference','$productProductName','$productQty','$productPrice')";
			$executeUpdateProductQuery = mysqli_query($con,$updateProductQuery);
			
			// Calculating the new available qty
			$newAvailableQty = $productRow['availableQty'] - $productRQty;

			// Should update the new quantity of the product
			$updateQuantityQuery = "update productsDummy set availableQty='$newAvailableQty' where productId='$productReference'";
			$executeUpdateQuantityQuery = mysqli_query($con,$updateQuantityQuery);

			header("Location:addToCartSuccess.php");
		}else{
			$productQty=0; // Final Qty is ZERO
			// Redirects to Qty Overflow error page
			header("Location:productQtyOverflow.php");
		}

	}else{
		// If negative quantity is input
		//invalid
		header("Location:productQtyOverflow.php");
	}	
}

// PA002 ///////////////////////////////////////////////////////////////////////////////////////////////////

// PA003 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

// The product which is going to be referred
$productReference = "PA003";

$productRQty = $_POST["pa003Qty"]; // Requested Qty got from form

// Queries to load data from table
$productQuery = "select availableQty,productName,productPrice from productsDummy where productId='$productReference'";
$productExecute = mysqli_query($con,$productQuery);
$productRow = mysqli_fetch_array($productExecute);

// Creating variables to store this product's details
$productProductName = $productRow['productName'];
$productPrice = $productRow['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["pa003Qty"]=="")){
	// If field is not left blank
	if(!($_POST["pa003Qty"]<=0)){

		if($productRow['availableQty'] >= $productRQty){
			//Available
			$productQty = $productRQty; // Final Qty is calculated (in a new variable)
			// Update Sales Table
			$updateProductQuery = "insert into sales values ('','$productReference','$productProductName','$productQty','$productPrice')";
			$executeUpdateProductQuery = mysqli_query($con,$updateProductQuery);
			
			// Calculating the new available qty
			$newAvailableQty = $productRow['availableQty'] - $productRQty;

			// Should update the new quantity of the product
			$updateQuantityQuery = "update productsDummy set availableQty='$newAvailableQty' where productId='$productReference'";
			$executeUpdateQuantityQuery = mysqli_query($con,$updateQuantityQuery);

			header("Location:addToCartSuccess.php");
		}else{
			$productQty=0; // Final Qty is ZERO
			// Redirects to Qty Overflow error page
			header("Location:productQtyOverflow.php");
		}

	}else{
		// If negative quantity is input
		//invalid
		header("Location:productQtyOverflow.php");
	}	
}

// PA003 ///////////////////////////////////////////////////////////////////////////////////////////////////

// PA004 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

// The product which is going to be referred
$productReference = "PA004";

$productRQty = $_POST["pa004Qty"]; // Requested Qty got from form

// Queries to load data from table
$productQuery = "select availableQty,productName,productPrice from productsDummy where productId='$productReference'";
$productExecute = mysqli_query($con,$productQuery);
$productRow = mysqli_fetch_array($productExecute);

// Creating variables to store this product's details
$productProductName = $productRow['productName'];
$productPrice = $productRow['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["pa004Qty"]=="")){
	// If field is not left blank
	if(!($_POST["pa004Qty"]<=0)){

		if($productRow['availableQty'] >= $productRQty){
			//Available
			$productQty = $productRQty; // Final Qty is calculated (in a new variable)
			// Update Sales Table
			$updateProductQuery = "insert into sales values ('','$productReference','$productProductName','$productQty','$productPrice')";
			$executeUpdateProductQuery = mysqli_query($con,$updateProductQuery);
			
			// Calculating the new available qty
			$newAvailableQty = $productRow['availableQty'] - $productRQty;

			// Should update the new quantity of the product
			$updateQuantityQuery = "update productsDummy set availableQty='$newAvailableQty' where productId='$productReference'";
			$executeUpdateQuantityQuery = mysqli_query($con,$updateQuantityQuery);

			header("Location:addToCartSuccess.php");
		}else{
			$productQty=0; // Final Qty is ZERO
			// Redirects to Qty Overflow error page
			header("Location:productQtyOverflow.php");
		}

	}else{
		// If negative quantity is input
		//invalid
		header("Location:productQtyOverflow.php");
	}	
}

// PA004 ///////////////////////////////////////////////////////////////////////////////////////////////////
// Accessories Page //////////////////////////////////////////////////////////////////////////////////////////////////////////////////












// CLosing the connection
mysqli_close($con);


?>