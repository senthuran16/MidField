<!DOCTYPE html>
<html lang="en">
<head>
    <title>Testimonial</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<?php
$thisPage="other"; //This is to highlight the current page in red
include("WebsiteHeader.php");
?>
<br/><br/><br/><br/><br/><br/>

				<?php 
                    echo"<div class=commentsDiv style=margin-left: 0 >";
                    include("connectToDatabase.php");

                    echo"<br/>";
                    echo"<h2 style=font-size:200% class=fontBlue align=center>What do others say about our website</h2>";

                    /*Query to display 10 random comments from database*/

                    $string ="select * from comments
                    order by rand()
                    limit 10";
                    if($string_run=mysqli_query($con,$string)){
	                   
   						echo"<p style=font-size:220%;color: #0d0d0d;>&nbsp;</p>";
   						echo"<p style=font-size:220%;color: #0d0d0d;>&nbsp;</p>";
   						
                        while( $rows=mysqli_fetch_array($string_run))
                        {	
    	                   echo"</br>";
    	                   echo"</br>";
    	                   
    	                   echo"<img src=Images/comments/frame.png  class=photo />";
    	                   echo"</br>";
    	                   echo"</br>";
    	                   echo"</br>";
    	                   
    	                    echo"</br>";
                            /* Retrieve name from database*/
                            echo "<p style=font-size:150%; class=fontRed>".$rows['Name']."</p>";
                           /* Retrieve comments from database*/
                            echo "<p style=font-size:220%;line-width:20px class=fontBlack>".$rows['Comments']."</p>";
                            /*Retrieve email address from database*/
                            echo "<p style=font-size:110%><font class=fontBlue>".$rows['Email']."</font></p>";
                          
                            echo"<p style=font-size:220%;color: #0d0d0d;>&nbsp;</p>";
                            echo"<p style=font-size:220%;color: #0d0d0d;>&nbsp;</p>";
                            
                           

                            
                        }
                    } else {
                        echo'<font class="redFont"> Query does not run. </font>';
                    }

                    echo "</div>";

                ?>
                
<?php
    $pageEditor="gowthamy"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php")
?>         
</body>
</html>
