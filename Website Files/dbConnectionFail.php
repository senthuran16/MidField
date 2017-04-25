<html>
<head>
<title>Error connecting to Database</title>
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
	<h2 style="font-size:200%" class="fontRed">Oops! Error connecting to Database!</h2>

	<?php
		echo"<p>";
		echo(mysqli_connect_error());
		echo"</br></p>";
		
	?>

	<br/><br/><a class=hyperlink href="#" onclick="history.back()">Go back</a>
</div>






<br/><br/><br/>

<br/><br/><br/>

<?php
    $pageEditor="senthuran"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php")
?>



</body>
</html>