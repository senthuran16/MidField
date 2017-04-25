<?php

echo "<link rel=stylesheet type=text/css href=Style.css>";

/*Establishes connection to database*/
include("connectToDatabase.php");

/*Getting details for a record through form*/
// This tells whether password confirm is true or not
$passwordConfirmation = $_POST["hiddenPasswordConfirmation"];
$fullName = $_POST["txtFullName"];
$userName = $_POST["txtUsername"];
$password = $_POST["txtPassword"];
$address = $_POST["txtAddress"];
$emailAddress = $_POST["txtEmailAddress"];

// Checking whether a user name exists already
$selectionQuery = "select username,password from websiteusers where username='$userName'";
$executeQuery = mysqli_query($con,$selectionQuery);
$row = mysqli_fetch_array($executeQuery);
// If the username is found
if($row['username'] == $userName){
	// Already existing username. So Redirects
	header("Location:signUpFailUserExists.php");
}else{
	// Username does not exist. Create user
	/*Register user writing SQL query*/
	$registerUserQuery = "insert into websiteusers values ('$userName','$password','$fullName','$address','$emailAddress')";

	// Execute SQL Query
	if($passwordConfirmation=="true"){
		$result = mysqli_query($con,$registerUserQuery);
	}

	if(!$result){
		header("Location:signUpFail.php");
		
	}else{
		session_start();
		session_destroy();
		header("Location:signUpSuccess.php");
	}
}



// CLosing the connection
mysqli_close($con);


?>