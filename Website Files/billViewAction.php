<br/><br/><br/><br/>

<?php

include("connectToDatabase.php");

// Reading the current salesId from database
$getRecentSalesQuery = "select salesId from orders";
$resultsGetRecentSalesQuery = mysqli_query($con,$getRecentSalesQuery);
while($recentSalesRow = mysqli_fetch_array($resultsGetRecentSalesQuery))
{
	$currentSalesId = $recentSalesRow['salesId'];
}

//Get order prepared timeStamp
$getTimeStampQuery = "select orderTime from orders where salesId='$currentSalesId'";
$executeTimeStampQuery = mysqli_query($con,$getTimeStampQuery);
$rowTimeStamp = mysqli_fetch_array($executeTimeStampQuery);
$currentTimeStamp = $rowTimeStamp['orderTime'];

//Get the customer name 
session_start();
$getFullNameQuery = "select fullName from websiteusers where username='$_SESSION[session1]'";
$executeFullNameQuery = mysqli_query($con,$getFullNameQuery);
$rowFullName = mysqli_fetch_array($executeFullNameQuery);
$currentUserFullName = $rowFullName['fullName'];

//calculate total price of the user
$getTotalPriceQuery = "select totalPrice from orders where salesId='$currentSalesId'";
$executeGetTotalPriceQuery = mysqli_query($con,$getTotalPriceQuery);
$rowGetTotalPrice = mysqli_fetch_array($executeGetTotalPriceQuery);
$currentTotalPrice = $rowGetTotalPrice['totalPrice'];

if($currentTotalPrice>=70000){
	// Green color if more than 70,000
	echo"<body bgcolor=#71E2A4>";
}else if($currentTotalPrice>=40000){
	// Blue color if 40,000<=price>70,000
	echo"<body bgcolor=#85D6F4>";
}else{
	// Butter color
	echo"<body bgcolor=#F9E0AC>";

}


// Getting credit card number and delivery address through POST method
$orderCreditCardNo = $_POST["txtCreditCardNo"];
$orderAddress = $_POST["txtAddress"];

$updateDeliveryDetailsQuery = "update orders set creditCardNo='$orderCreditCardNo',deliveryAddress='$orderAddress' where salesId='$currentSalesId'";
$resultsUpdateDeliveryDetailsQuery = mysqli_query($con,$updateDeliveryDetailsQuery);

// Write Credit card number and Delivery address to 'orders' table


//VIEW BILL
echo"<div class=contentDiv>";

echo"<div >";
	echo"<img  width=90 src=Images/Logos/siteLogoDark.png>";
echo"</div>";
echo"<h3 style=font-size:200% class=fontBlue>Invoice</h3>";

echo"<a><b>Invoice ID : </b>".$currentSalesId."</a><br/><br/>";
echo"<a><b>Ordered by : </b></a>";
echo"<a>".$currentUserFullName."</a><br/><br/>";
echo"<a><b>Deliver to : </b></a>";
echo"<a>".$orderAddress."</a>";
echo"<br/>";
echo"<br/>";


$selectSalesQuery = "select productId,productName,productPrice,SUM(productQty) as purchasedQty from sales where salesId='$currentSalesId' group by productId ";
$resultsSelectSalesQuery = mysqli_query($con,$selectSalesQuery);

echo"<div class=contentDiv>";
echo"<br/>";
	echo"<table width=900>";
		echo"<tr> <th align=left> Product ID </th> <th align=left> Product </th> <th align=right> Quantity </th> <th align=right> Unit Price </th> <th align=right> Line Total </th></tr>";

while($billRow = mysqli_fetch_array($resultsSelectSalesQuery))
{
	echo"<tr><td align=left>".$billRow['productId']."</td>"."<td align=left>".$billRow['productName']."</td>"."<td align=right>".$billRow['purchasedQty']."</td>"."<td align=right>".$billRow['productPrice']."</td><td align=right>".($billRow['productPrice']*$billRow['purchasedQty'])."</td></tr>";

}

	echo"</table>";
	echo"<br/>";
	echo"<br/>";


//calculate total price of the user
/*$getTotalPriceQuery = "select totalPrice from sales where salesId='$currentSalesId'";
$executeGetTotalPriceQuery = mysqli_query($con,$getTotalPriceQuery);
$rowGetTotalPrice = mysqli_fetch_array($executeGetTotalPriceQuery);
$currentTotalPrice = $rowGetTotalPrice['totalPrice'];*/

echo"<a><b>Total Amount : <font class=fontRed>LKR ".$currentTotalPrice."</b></font></a>"; 


echo"</div>";

echo"<br/>";
echo"<p style=font-size:80%>The above automated bill was generated on ".$currentTimeStamp.". <br/>The Invoice ID can be used when tracking orders </br></p>";
echo"<a href=home.php><button type=button class=commonButton>Dismiss</button></a>";
echo"<br/><br/>";




echo"</body>";

// CLosing the connection
mysqli_close($con);


?>