<?php

	echo "<link rel=stylesheet type=text/css href=Style.css>";

	/*Establish Connection to host and user*/
	$con = mysqli_connect("localhost","root","");

	// USERNAME PW SAMPLE ARRANGEMENT
	//$con = mysqli_connect("localhost","User","PW");

	/*Select Database*/
	mysqli_select_db($con,"webcwdb");

	/*Checking whether the connection is established properly or not*/
	if(!$con){
		header("Location:dbConnectionFail.php");
	}else{
		// Connection is successful do nothing
		//echo"<h3>Connection Successful</h3><br/>";
	}

?>