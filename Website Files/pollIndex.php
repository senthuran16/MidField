<link rel="stylesheet" href="Style.css" type="text/css" media="screen" />

<?php
$thisPage="poll"; //This is to highlight the current page in red
include("WebsiteHeader.php");
?>
<br/><br/><br/>
<div class="contentCenterDiv">
<?php
	include('connectToDatabase.php');
	
	if(isset($_POST['vote']) && isset($_POST['questions'])){
		$query = mysqli_query($con,"SELECT `pollAnswers`.`pid` FROM  `pollResponses`, `pollAnswers` WHERE `pollResponses`.`qid`=`pollAnswers`.`id` AND `pollResponses`.`user`='".$_SESSION["session1"]."' AND pid=(SELECT pid FROM `pollAnswers` WHERE id='".$_POST['questions']."' LIMIT 1)");
		if(mysqli_num_rows($query) == 0){
			$query = mysqli_query($con,"INSERT INTO `pollResponses` (`qid`, `user`) VALUES ('".$_POST['questions']."', '".$_SESSION["session1"]."')");
		} else {
			$error = 'You Already Voted';
		}		
	} else if(!isset($_POST['questions']) && isset($_POST['vote'])){
		$error = 'You Need To Select a Question';
	}
	
	include('pollView.php');
?>
</div>
<?php
    $pageEditor="sahana"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php")
?>
