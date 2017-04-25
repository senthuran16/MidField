<html>
<head>
<title>Login</title>
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
	<p style="font-size:90%">Please login to continue</br></p>
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
	<br/><br/><a style="font-size:80%" class=hyperlink href=signup.php>New to site? Sign Up</a>
	<br/><br/><a style="font-size:80%" class=hyperlink href="#" onclick="history.back()">Go Back</a>

</form>
</div>

<?php
    $pageEditor="senthuran"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php")
?>



</body>
</html>