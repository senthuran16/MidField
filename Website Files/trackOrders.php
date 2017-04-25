<html>
<head>
<title>Track Order Status</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
<?php
$thisPage="other"; //This is to highlight the current page in red
include("WebsiteHeader.php");
?>

<br/><br/><br/><br/><br/><br/>
<div class="loginContentDiv">
	<!-- LOGO ONLY -->
	<div class="logosContainerDiv">
		<img  width=90 src="Images/Logos/siteLogoDark.png">
	</div>
	<h2 style="font-size:200%" class="fontBlue">Track your order status</h2>
	<p style="font-size:90%">Please Select your order's Invoice ID</br></p>
	<br/>
</div>

<div class="loginContentDiv">

<form name="formTrackOrders" method="POST" action="trackOrderStatusAction.php">
		<!-- Selection box containing only the user's orders-->
	<?php
		include("connectToDatabase.php");
		

		$getMySalesQuery = "select salesId from orders where username='$_SESSION[session1]'";
		$resultsGetMySalesQuery = mysqli_query($con,$getMySalesQuery);
		$counter=0;
		while($recentSalesRow = mysqli_fetch_array($resultsGetMySalesQuery))
		{
			$counter++;
		}

		if($counter>0){
			// Atleast there is one order for this customer
			echo"<select name=txtOrderID>";
			// For each founc sales, generate an option 
			$getMySalesQuery = "select salesId from orders where username='$_SESSION[session1]'";
			$resultsGetMySalesQuery = mysqli_query($con,$getMySalesQuery);
		
			while($recentSalesRow = mysqli_fetch_array($resultsGetMySalesQuery))
			{
				echo"<option value=".$recentSalesRow['salesId'].">".$recentSalesRow['salesId']."</option>";
			}
			echo"</select><br/><br/>";

			echo"<input type=submit value='View Status' class=commonButton name=btnLogin>";
		}else{
			// No orders for this customer
			echo"<input type=text size=30 disabled value='You have not made any orders yet'></br>";
		}
	?>



	
	
	

</form>
</div>

<?php
    $pageEditor="senthuran"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php");
?>



</body>
</html>