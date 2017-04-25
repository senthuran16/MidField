<html>
<head>
<title>Order not found!</title>
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
	<h2 style="font-size:200%" class="fontBlue">Modify order status</h2>
	<p style="font-size:90%" class="fontRed">Such order does not exist. Please enter a valid order ID </br></p>
	<br/>
</div>

<div class="loginContentDiv">

<form name="formModifyOrders" method="POST" action="modifyOrderStatusAction.php">
	<a id="formText">Order ID	</a><br/>
	<input type="text" name="txtOrderID" size="30" required></br></br>
	<a id="formText">Status	</a><br/>
	<!-- <input type="text" name="txtOrderStatus" size="30" required></br></br> -->
	<select name="txtOrderStatus">
  		<option value="Ordered">Ordered</option>
  		<option value="Dispatched">Dispatched</option>
  		<option value="Delivered">Delivered</option>
	</select>
	
	<br/>
	<br/>

	<button type="reset" class="commonButton">Clear</button>
	<input type="submit" value="Modify" class="commonButton" name="btnLogin">
	

</form>
</div>

<?php
    $pageEditor="senthuran"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php")
?>



</body>
</html>