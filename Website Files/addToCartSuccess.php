<html>
<head>
<title>Item added to Cart</title>
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

	<h2 style="font-size:200%" class="fontBlue">The item was successfully added to cart!</h2>
	<div class="loginContentDiv">
		<br/><br/><a class=hyperlink href="#" onclick="history.back()">Continue shopping</a>
		<br/><br/>
		<?php
			echo"<form name=checkoutButtonForm method=POST action=checkoutAction.php>";
				echo"<input type=submit class=checkoutButton value=Proceed&nbsp;To&nbsp;Checkout>";
				echo"<br/><br/>";
			echo"</form>";
		?>

		</form>
	</div>
</div>

<br/><br/><br/>

<br/><br/><br/>

<?php
    $pageEditor="senthuran"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php")
?>



</body>
</html>