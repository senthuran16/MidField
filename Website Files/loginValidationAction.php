<?php
session_start();
echo "<link rel=stylesheet type=text/css href=Style.css>";

/*Establishes connection to database*/
include("connectToDatabase.php");

/*Getting details for a record through form*/
// This tells whether password confirm is true or not

$userName = $_POST["txtUsername"];
$password = $_POST["txtPassword"];



/*Register user writing SQL query*/
$selectionQuery = "select username,password from websiteusers where username='$userName'";

// Execute SQL Query

$executeQuery = mysqli_query($con,$selectionQuery);
$row = mysqli_fetch_array($executeQuery);		


if($row['username'] == $userName){
	if($row['password'] == $password){
		if(!($userName=="" || $password=="")){
			$_SESSION["session1"] = $userName;
			header("Location:home.php");
		}else{
			header("Location:loginError.php");
		}

		
	}else{
		header("Location:loginError.php");
	}
}else{
	header("Location:loginErrorNoUser.php");
}

// CLosing the connection
mysqli_close($con);



?>