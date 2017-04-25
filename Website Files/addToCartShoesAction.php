<?php

echo "<link rel=stylesheet type=text/css href=Style.css>";

/*Establishes connection to database*/
include("connectToDatabase.php");

// Shoes Page //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// PB001 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

// The product which is going to be referred
$productReference = "PB001";

$productRQty = $_POST["pb001Qty"]; // Requested Qty got from form

// Queries to load data from table
$productQuery = "select availableQty,productName,productPrice from productsDummy where productId='$productReference'";
$productExecute = mysqli_query($con,$productQuery);
$productRow = mysqli_fetch_array($productExecute);

// Creating variables to store this product's details
$productProductName = $productRow['productName'];
$productPrice = $productRow['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["pb001Qty"]=="")){
	// If field is not left blank
	if(!($_POST["pb001Qty"]<=0)){

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

// PB001 ///////////////////////////////////////////////////////////////////////////////////////////////////


// PB002 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

// The product which is going to be referred
$productReference = "PB002";

$productRQty = $_POST["pb002Qty"]; // Requested Qty got from form

// Queries to load data from table
$productQuery = "select availableQty,productName,productPrice from productsDummy where productId='$productReference'";
$productExecute = mysqli_query($con,$productQuery);
$productRow = mysqli_fetch_array($productExecute);

// Creating variables to store this product's details
$productProductName = $productRow['productName'];
$productPrice = $productRow['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["pb002Qty"]=="")){
	// If field is not left blank
	if(!($_POST["pb002Qty"]<=0)){

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

// PB002 ///////////////////////////////////////////////////////////////////////////////////////////////////

// PB003 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

// The product which is going to be referred
$productReference = "PB003";

$productRQty = $_POST["pb003Qty"]; // Requested Qty got from form

// Queries to load data from table
$productQuery = "select availableQty,productName,productPrice from productsDummy where productId='$productReference'";
$productExecute = mysqli_query($con,$productQuery);
$productRow = mysqli_fetch_array($productExecute);

// Creating variables to store this product's details
$productProductName = $productRow['productName'];
$productPrice = $productRow['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["pb003Qty"]=="")){
	// If field is not left blank
	if(!($_POST["pb003Qty"]<=0)){

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

// PB003 ///////////////////////////////////////////////////////////////////////////////////////////////////

// PB004 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

// The product which is going to be referred
$productReference = "PB004";

$productRQty = $_POST["pb004Qty"]; // Requested Qty got from form

// Queries to load data from table
$productQuery = "select availableQty,productName,productPrice from productsDummy where productId='$productReference'";
$productExecute = mysqli_query($con,$productQuery);
$productRow = mysqli_fetch_array($productExecute);

// Creating variables to store this product's details
$productProductName = $productRow['productName'];
$productPrice = $productRow['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["pb004Qty"]=="")){
	// If field is not left blank
	if(!($_POST["pb004Qty"]<=0)){

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

// PB004 ///////////////////////////////////////////////////////////////////////////////////////////////////

// Shoes Page //////////////////////////////////////////////////////////////////////////////////////////////////////////////////












// CLosing the connection
mysqli_close($con);


?>