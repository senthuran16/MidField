<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>

<!-- <body>

	<form name="fromLogin" method="POST" action="processLogin.php">
		<a id="formText">Username</a><br/>
		<input type="text" name="txtUsername"></br>
		<a id="formText">Password</a><br/>
		<input type="password" name="txtPassword"></br>
		<input type="submit" value="Login" name="btnLogin">
	</form>

</body> -->





<body>



<div class="centerDiv">
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<h2 style="font-size:200%">Login</h2>
<p style="font-size:80%">Please login to continue to </br></p>
<br/>
</div>

<div class="centerDiv">

<form name="formLogin" method="POST" action="process.php">
<a id="formText">Username	</a><br/>
<input type="text" name="Username" placeholder="admin" size="30"></br></br>
<a id="formText">Password	</a><br/>
<input type="password" name="Password" placeholder="1234" size="30"></br></br>

</br>
<div class="centerDiv">
<button type="reset" class="button">Clear</button>
<input type="submit" value="Login" class="button" name="btnLogin">
</div>

</form>
</div>

</br>
<div id="displayDetails" class="centerDiv"></div>




</body>
</html>