<html>
<head>
<title>Error Logging in</title>
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
<p style="font-size:90%" class="fontRed">There is no user in the given name. Try again </br></p>
<br/>
</div>

<div class="loginContentDiv">

<form name="formLogin" method="POST" action="loginValidationAction.php">
	<a id="formText">Username	</a><br/>
	<input type="text" name="txtUsername" size="30"></br></br>
	<a id="formText">Password	</a><br/>
	<input type="password" name="txtPassword" size="30"></br></br>

	</br>

	<button type="reset" class="commonButton">Clear</button>
	<input type="submit" value="Login" class="commonButton" name="btnLogin">
	<br/><br/><a  class=hyperlink href=signup.php>Sign Up</a>
	<br/><br/><a style="font-size:80%" class=hyperlink href="home.php">Go Back</a>


</form>
</div>

<?php
    $pageEditor="senthuran"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php")
?>



</body>
</html>