<?php

echo "<link rel=stylesheet type=text/css href=Style.css>";

/*Establishes connection to database*/
include("connectToDatabase.php");

// PA001 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

$pa001RQty = $_POST["txtPa001Qty"]; // Requested Qty got from form

// Queries to load data from table
$pa001Query = "select availableQty,productName,productPrice from products where productId='PA001'";
$pa001Execute = mysqli_query($con,$pa001Query);
$pa001Row = mysqli_fetch_array($pa001Execute);

// Creating variables to store this product's details
$pa001ProductName = $pa001Row['productName'];
$pa001Qty;
$pa001Price = $pa001Row['productPrice'];

// Compares whether requested Qty is available in stock
if(!($_POST["txtPa001Qty"]=="")){
	if($pa001Row['availableQty'] >= $pa001RQty){
		//Available
		$pa001Qty = $pa001RQty; // Final Qty is calculated (in a new variable)
		// Update Sales Table
		$updatePa001Query = "insert into sales values ('','PA001','$pa001ProductName','$pa001Qty','$pa001Price')";
		$executeUpdatePa001Query = mysqli_query($con,$updatePa001Query);
		header("Location:addToCartSuccess.php");
	}else{
		$pa001Qty=0; // Final Qty is ZERO
		// Redirects to Qty Overflow error page
		header("Location:productQtyOverflow.php");
	}	
}

// PA001 ///////////////////////////////////////////////////////////////////////////////////////////////////



// PA002 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

$pa002RQty = $_POST["txtPa002Qty"]; // Requested Qty got from form

// Queries to load data from table
$pa002Query = "select availableQty,productName,productPrice from products where productId='PA002'";
$pa002Execute = mysqli_query($con,$pa002Query);
$pa002Row = mysqli_fetch_array($pa002Execute);

// Creating variables to store this product's details
$pa002ProductName = $pa002Row['productName'];
$pa002Qty;
$pa002Price = $pa002Row['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["txtPa002Qty"]=="")){
	if($pa002Row['availableQty'] >= $pa002RQty){
		//Available
		$pa002Qty = $pa002RQty; // Final Qty is calculated (in a new variable)
		// Update Sales Table
		$updatePa002Query = "insert into sales values ('','PA002','$pa002ProductName','$pa002Qty','$pa002Price')";
		$executeUpdatePa002Query = mysqli_query($con,$updatePa002Query);
		header("Location:addToCartSuccess.php");
	}else{
		$pa002Qty=0; // Final Qty is ZERO
		// Redirects to Qty Overflow error page
		header("Location:productQtyOverflow.php");
	}	
}



// PA002 ///////////////////////////////////////////////////////////////////////////////////////////////////


// PA003 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

$pa003RQty = $_POST["txtPa003Qty"]; // Requested Qty got from form

// Queries to load data from table
$pa003Query = "select availableQty,productName,productPrice from products where productId='PA003'";
$pa003Execute = mysqli_query($con,$pa003Query);
$pa003Row = mysqli_fetch_array($pa003Execute);

// Creating variables to store this product's details
$pa003ProductName = $pa003Row['productName'];
$pa003Qty;
$pa003Price = $pa003Row['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["txtPa003Qty"]=="")){
	if($pa003Row['availableQty'] >= $pa003RQty){
		//Available
		$pa003Qty = $pa003RQty; // Final Qty is calculated (in a new variable)
		// Update Sales Table
		$updatePa003Query = "insert into sales values ('','PA003','$pa003ProductName','$pa003Qty','$pa003Price')";
		$executeUpdatePa003Query = mysqli_query($con,$updatePa003Query);
		header("Location:addToCartSuccess.php");
	}else{
		$pa003Qty=0; // Final Qty is ZERO
		// Redirects to Qty Overflow error page
		header("Location:productQtyOverflow.php");
	}	
}



// PA003 ///////////////////////////////////////////////////////////////////////////////////////////////////


// PA004 ///////////////////////////////////////////////////////////////////////////////////////////////////

/*Getting details for a record through form*/

$pa004RQty = $_POST["txtPa004Qty"]; // Requested Qty got from form

// Queries to load data from table
$pa004Query = "select availableQty,productName,productPrice from products where productId='PA004'";
$pa004Execute = mysqli_query($con,$pa004Query);
$pa004Row = mysqli_fetch_array($pa004Execute);

// Creating variables to store this product's details
$pa004ProductName = $pa004Row['productName'];
$pa004Qty;
$pa004Price = $pa004Row['productPrice'];

// Compares whether requested Qty is available in stock

if(!($_POST["txtPa004Qty"]=="")){
	if($pa004Row['availableQty'] >= $pa004RQty){
		//Available
		$pa004Qty = $pa004RQty; // Final Qty is calculated (in a new variable)
		// Update Sales Table
		$updatePa004Query = "insert into sales values ('','PA004','$pa004ProductName','$pa004Qty','$pa004Price')";
		$executeUpdatePa004Query = mysqli_query($con,$updatePa004Query);
		header("Location:addToCartSuccess.php");
	}else{
		$pa004Qty=0; // Final Qty is ZERO
		// Redirects to Qty Overflow error page
		header("Location:productQtyOverflow.php");
	}	
}



// PA004 ///////////////////////////////////////////////////////////////////////////////////////////////////



// CLosing the connection
mysqli_close($con);


?>