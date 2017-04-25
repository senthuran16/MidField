<html>
<head>
<title>Order Details</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>


<br/><br/><br/>
<div class="loginContentDiv">
<!-- LOGO ONLY -->
<div class="logosContainerDiv">
	<img  width=90 src="Images/Logos/siteLogoDark.png">
</div>

<h2 style="font-size:200%" class="fontBlue">Your order is ready to be processed!</h2>
<p>Please enter the following details as the last step</br></p>
<br/>
</div>

<div class="loginContentDiv">

<form name="formCheckoutDetails" method="POST" action="billViewAction.php">
	
	<?php
		//Get the customer name and address
		require("connectToDatabase.php");
		session_start();

		$getCustDetailsQuery = "select fullName,address from websiteusers where username='$_SESSION[session1]'";
		$executeCustDetailsQuery = mysqli_query($con,$getCustDetailsQuery);
		$rowCustDetails = mysqli_fetch_array($executeCustDetailsQuery);
		$userFullName = $rowCustDetails['fullName'];
		$userAddress = $rowCustDetails['address'];
	
	echo"<a id=formText>Customer Name</a><br/>";
	echo"<input type=text name=txtCustomerName size=30 disabled value='".$userFullName."'size=30 disabled></br></br>";
	echo"<a id=formText>Delivery Address	</a><br/>";
	echo"<input type=text name=txtAddress size=30 required value='".$userAddress."'></br></br>";
	echo"<a style=font-size:90% class=fontBlue>This address can be changed on your preference for this order</br></p>";
	echo"<a id=formText>Credit Card Number</a><br/>";
	echo"<input type=text name=txtCreditCardNo size=30 required></br></br>";
	?>
	</br>

	<button type="reset" class="commonButton">Clear</button>
	<input type="submit" value="Place Order" class="commonButton" name="btnFinalCheckout">

</form>
</div>





</body>
</html>