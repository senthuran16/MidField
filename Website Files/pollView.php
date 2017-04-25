
<?php
	include('connectToDatabase.php');
	
	$query = mysqli_query($con,"SELECT * FROM `pollQuestions` ORDER BY `id` DESC LIMIT 1");
	$rows = mysqli_num_rows($query);
	
	if($rows > 0){
		$poll = mysqli_fetch_array($query);
		$title = $poll['name'];
	} else {
		$title = 'No Poll Yet';
	}
	$me;
	$query = mysqli_query($con,"SELECT COUNT(`id`) as hits FROM `pollResponses` GROUP BY `qid`");
	while($row = mysqli_fetch_array($query)){
		$me[] = $row['hits'];
		$max = max($me);
	}
	//$max = max($me);
	
	$query = mysqli_query($con,"SELECT `pollAnswers`.`pid` FROM  `pollResponses`, `pollAnswers` WHERE `pollResponses`.`qid`=`pollAnswers`.`id` AND `pollResponses`.`user`='".$_SESSION["session1"]."' AND pid='".$poll['id']."'");///////////////////////////////////////////////////
	
	if(mysqli_num_rows($query) > 0){
	$total = mysqli_query($con,"SELECT `pollAnswers`.`pid` FROM  `pollResponses`, `pollAnswers` WHERE `pollResponses`.`qid`=`pollAnswers`.`id` AND pid='".$poll['id']."'");
	$total = mysqli_num_rows($total);
?>

<div class="contentCenterDiv">
<table width="300" cellpadding="0" cellspacing="0" border="0" class="maintable" align="center">
	<tr>
		<td valign="top" align="center" class="title"><?php echo $title; ?></td>
	</tr>
	<?php
		$query = mysqli_query($con,"SELECT * FROM `pollAnswers` WHERE `pid`='".$poll['id']."' ORDER BY `question`");
		$questions = mysqli_num_rows($query);
		if($questions > 0){
	?>
	<tr>
		<td valign="top" style="padding: 5px;">
		<table width="100%" cellpadding="0" cellspacing="0" border="0" class="question">
			<?php
				while($question = mysqli_fetch_array($query)){
					$responses = mysqli_query($con,"SELECT count(id) as total FROM `pollResponses` WHERE qid='".$question['id']."'");
					$responses = mysqli_fetch_array($responses);
					
					if($total > 0 && $responses['total'] > 0){
						$percentage = round(($responses['total'] / $max) * 100);
					} else {
						$percentage = 0;
					}
					
					$percentage2 = 100 - $percentage;
			?>
				<tr>
					<td valign="top" nowrap="nowrap"><?php echo $question['question']; ?></td>
					<td valign="top" height="10" width="100%" style="padding: 0px 10px;">
					<table width="100%" cellpadding="0" cellspacing="0" border="0">
						<tr>
						<?php
						if($question['id']==1){ ?>
							<td valign="top" width="<?php echo $percentage; ?>%" <?php if($percentage > 0){?>style="background: url('Images/Poll/bar.png') repeat-x;"<?php } ?>><img src="Images/Poll/dot.gif" width="1" height="19" /></td>
							<td valign="top" width="<?php echo $percentage2; ?>%"></td>
						<?php
						}else if($question['id']==2){
						?>
							<td valign="top" width="<?php echo $percentage; ?>%" <?php if($percentage > 0){?>style="background: url('Images/Poll/bar2.png') repeat-x;"<?php } ?>><img src="Images/Poll/dot.gif" width="1" height="19" /></td>
							<td valign="top" width="<?php echo $percentage2; ?>%"></td>
						<?php
						}else if($question['id']==3){ 
						?>
							<td valign="top" width="<?php echo $percentage; ?>%" <?php if($percentage > 0){?>style="background: url('Images/Poll/bar3.png') repeat-x;"<?php } ?>><img src="Images/Poll/dot.gif" width="1" height="19" /></td>
							<td valign="top" width="<?php echo $percentage2; ?>%"></td>
						<?php
						}else{ 
						?>
							<td valign="top" width="<?php echo $percentage; ?>%" <?php if($percentage > 0){?>style="background: url('Images/Poll/bar4.png') repeat-x;"<?php } ?>><img src="Images/Poll/dot.gif" width="1" height="19" /></td>
							<td valign="top" width="<?php echo $percentage2; ?>%"></td>
						<?php
						} 
						?>	
						</tr>
					</table>
					</td>
					<td valign="top"><?php echo $responses['total']; ?></td>
				</tr>
			<?php
			}
			?>
			<tr>
				<td valign="top" colspan="3" align="center" style="padding: 10px 0px 0px 0px;">
				<font class="fontBlack"><b>Total Votes: <font class="fontRed"><?php echo $total; ?></b></font></font></td>
			</tr>
		</table>
		</td>
	</tr>
	<?php
		}
	?>
</table>
</div>
<?php
	} else {
?>
<div class="contentCenterDiv">
<table width="300" cellpadding="0" cellspacing="0" border="0" class="maintable" align="center">
	<tr>
		<td valign="top" align="center" class="title"><?php echo $title; ?></td>
	</tr>
	<?php
		$query = mysqli_query($con,"SELECT * FROM `pollAnswers` WHERE `pid`='".$poll['id']."' ORDER BY `question`");
		$questions = mysqli_num_rows($query);
		if($questions > 0){
	?>
	<tr>
		<td valign="top" style="padding: 5px;">
		<form name="poll" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<table width="100%" cellpadding="0" cellspacing="0" border="0" class="question">
		<?php
			if(isset($error)){
		?>
			<tr>
				<td valign="top" colspan="2" align="center" style="padding: 0px 0px 10px 0px;">
				<?php
				echo "<p style=font-size:90% class=fontRed>".$error; ?>
				</td>
				</tr>
		<?php
			}
		?>
			<?php
				while($question = mysqli_fetch_array($query)){
			?>
				<tr>
					<td valign="top" style="padding: 0px 10px 0px 0px;"><input type="radio" name="questions" value="<?php echo $question['id']; ?>" /></td>
					<td valign="top" width="100%"><?php echo $question['question']; ?></td>
				</tr>
			<?php
			}
			?>
			<tr>
				<td valign="top" colspan="2" align="center" style="padding: 10px 0px 0px 0px;"><input type="submit"  name="vote" class="commonButton" value="Submit Vote" /></td>
			</tr>
		</table>
		</form>

		</td>
	</tr>
	<?php
		}
	?>
</table>
</div>
<?php
	}
?>

</div>
