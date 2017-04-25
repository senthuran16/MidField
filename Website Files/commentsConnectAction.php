<html>
<head>
<title>Thank you for the feedback</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>

<?php
$thisPage="other"; //This is to highlight the current page in red
include("WebsiteHeader.php");
?>

<br/><br/><br/>

<div class="contentDiv">

<?php

	/*Establishes connection to database*/
	include("connectToDatabase.php");

	/*Getting details for a record through form*/
	// This tells whether password confirm is true or not
	$Name=$_POST["name"];
	$Email=$_POST["mailId"];
	$Comments=$_POST["comments"];
	
		/*This tells whether user want mail updates or not*/
		if (isset($_POST['updates']) && ($_POST['updates'] == "yes")) {
 			$ReceiveEmails = "yes";

		} else {
 			$ReceiveEmails = "no";
		}
 
 	

	//Ratings
	if (isset($_POST['rating-input-1']) && ($_POST['rating-input-1'] == "5")) {
 		$UserRating = "5";

	} else if(isset($_POST['rating-input-1']) && ($_POST['rating-input-1'] == "4")) {
 		$UserRating = "4";
	}else if(isset($_POST['rating-input-1']) && ($_POST['rating-input-1'] == "3")) {
 		$UserRating = "3";
	}else if(isset($_POST['rating-input-1']) && ($_POST['rating-input-1'] == "2")) {
 		$UserRating = "2";
	}else if(isset($_POST['rating-input-1']) && ($_POST['rating-input-1'] == "1")) {
 		$UserRating = "1";
	}
	//$ReceiveEmails=$_POST["updates"];

	/*Register user writing SQL query*/
	$query = "insert into comments(Name,Email,Comments,UserRating,ReceiveEmails) values ('$Name','$Email','$Comments', '$UserRating','$ReceiveEmails')";

	$result=mysqli_query($con,$query);
		if(!$result){
			die(mysqli_error($con));
		}else{
			//session_start();
			//session_destroy();
			echo"<div class=loginContentDiv>";
		/*<!-- LOGO ONLY -->*/
			echo"<div class=logosContainerDiv>";
			echo"<img  width=90 src=Images/Logos/siteLogoDark.png>";
			echo"</div>";
			echo"<h2 style=font-size:200% class=fontBlue>Thank you for your feedback on us!! </h2>";
			
			echo"We are always grateful to hear from you and encourage you to pass along your thoughts...";
	
		}

	// CLosing the connection
	mysqli_close($con);
		?>

		<br/><br/><a class=hyperlink href="home.php">Go back</a>
</div>
</div>

<br/><br/><br/><br/><br/><br/>
<?php
    $pageEditor="gowthamy"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php")
?>

</body>
</html>