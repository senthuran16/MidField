<?php

echo "<link rel=stylesheet type=text/css href=Style.css>";

/*Establishes connection to database*/
include("connectToDatabase.php");

// Clothing Page //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// PC001 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

// The product which is going to be referred
$productReference = "PC001";

$productRQty = $_POST["pc001Qty"]; // Requested Qty got from form

// Queries to load data from table
$productQuery = "select availableQty,productName,productPrice from productsDummy where productId='$productReference'";
$productExecute = mysqli_query($con,$productQuery);
$productRow = mysqli_fetch_array($productExecute);

// Creating variables to store this product's details
$productProductName = $productRow['productName'];
$productPrice = $productRow['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["pc001Qty"]=="")){
	// If field is not left blank
	if(!($_POST["pc001Qty"]<=0)){

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

// PC001 ///////////////////////////////////////////////////////////////////////////////////////////////////


// PC002 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

// The product which is going to be referred
$productReference = "PC002";

$productRQty = $_POST["pc002Qty"]; // Requested Qty got from form

// Queries to load data from table
$productQuery = "select availableQty,productName,productPrice from productsDummy where productId='$productReference'";
$productExecute = mysqli_query($con,$productQuery);
$productRow = mysqli_fetch_array($productExecute);

// Creating variables to store this product's details
$productProductName = $productRow['productName'];
$productPrice = $productRow['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["pc002Qty"]=="")){
	// If field is not left blank
	if(!($_POST["pc002Qty"]<=0)){

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

// PC002 ///////////////////////////////////////////////////////////////////////////////////////////////////

// PC003 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

// The product which is going to be referred
$productReference = "PC003";

$productRQty = $_POST["pc003Qty"]; // Requested Qty got from form

// Queries to load data from table
$productQuery = "select availableQty,productName,productPrice from productsDummy where productId='$productReference'";
$productExecute = mysqli_query($con,$productQuery);
$productRow = mysqli_fetch_array($productExecute);

// Creating variables to store this product's details
$productProductName = $productRow['productName'];
$productPrice = $productRow['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["pc003Qty"]=="")){
	// If field is not left blank
	if(!($_POST["pc003Qty"]<=0)){

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

// PC003 ///////////////////////////////////////////////////////////////////////////////////////////////////

// PC004 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

// The product which is going to be referred
$productReference = "PC004";

$productRQty = $_POST["pc004Qty"]; // Requested Qty got from form

// Queries to load data from table
$productQuery = "select availableQty,productName,productPrice from productsDummy where productId='$productReference'";
$productExecute = mysqli_query($con,$productQuery);
$productRow = mysqli_fetch_array($productExecute);

// Creating variables to store this product's details
$productProductName = $productRow['productName'];
$productPrice = $productRow['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["pc004Qty"]=="")){
	// If field is not left blank
	if(!($_POST["pc004Qty"]<=0)){

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

// PC004 ///////////////////////////////////////////////////////////////////////////////////////////////////

// Clothing Page //////////////////////////////////////////////////////////////////////////////////////////////////////////////////












// CLosing the connection
mysqli_close($con);


?>