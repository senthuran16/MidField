<html>
<head>
<title>Item out of stock</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
<?php
$thisPage="other"; //This is to highlight the current page in red
include("WebsiteHeader.php");
?>
<br/><br/><br/>



<!-- LOGO ONLY -->



<div class="contentDiv">
<div >
	<img  width=90 src="Images/Logos/siteLogoDark.png">
</div>
	<h2 style="font-size:200%" class="fontRed">We're Sorry! <br/>We don't have the requested quantity of this item in stock now!</h2>

	<?php
		echo"<p>";
		echo"Please select available number of quantities to purchase, or come back to us on a later time. We apologize for the inconvinience caused.";
		echo"</br></p>";
		
	?>

	<br/><br/><a class=hyperlink href="#" onclick="history.back()">Return and continue shopping</a>
</div>



<br/><br/><br/><br/><br/><br/>

<?php
    $pageEditor="senthuran"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php")
?>






</body>
</html>