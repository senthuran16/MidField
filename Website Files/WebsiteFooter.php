<link rel="stylesheet" type="text/css" href="Style.css">
<?php
if($thisPage!="home"){
  echo"<br/><br/><br/><br/>";
}
?>
<!-- <br/><br/><br/><br/> -->
<footer>
<div class="footerContainerDiv">

	<br/><br/>

	<div class="footerFonts" bgcolor="#0d0d0d">

	

		<div class="logosContainerDiv" >
			
			<?php
          // RANDOM CODE DEPENDING ON LOGIN SESSION
  				/*//session_start();
  				if(isset($_SESSION["session1"])){
    				//echo"<div class=loggedInUserDiv><p align=right>".$_SESSION["session1"]."</p></div>";
  					echo"<div class=notLoggedInUserDiv >";

    				echo"<a style=font-size:200%> &nbsp;</a>";
    				echo"<a class=fontRed>".$_SESSION["session1"]." </a> <a>&nbsp;&nbsp;&nbsp; </a>";
    				echo"<a class=navBarUpperText href=logout.php>Logout </a>";
    				echo"</div>";
            
  				}else{
    				echo"<div class=notLoggedInUserDiv >";

    				echo"<a style=font-size:200%> &nbsp;</a>";
    				echo"<a class=navBarUpperText href=login.php>Login </a> <a>&nbsp;&nbsp;&nbsp; </a>";
    				echo"<a class=navBarUpperText href=signup.php>Sign Up </a>";
    				echo"</div>";
  				}*/

          
          echo"<div class=footerLeftSubDiv>";
            echo"<p class=footerHeadings>Comments</p>";
            echo"<a class=footerHyperlinks href=WebsiteCommentsForm.php>Review this site</a><br/>";
            echo"<a class=footerHyperlinks href=Testimonial.php>See what others tell</a>";
          echo"</div>";
          echo"<div class=footerLeftSubDiv>";
            echo"<p class=footerHeadings href=#>Map</p>";
            echo"<a class=footerHyperlinks href=map.php>View the map</a><br/>";
          echo"</div>";

           
            if(isset($_SESSION["session1"])){
              echo"<div class=footerLeftSubDiv>";
                echo"<p class=footerHeadings href=#>Order Tracking</p>";

              if($_SESSION["session1"]=="admin"){
                  echo"<a class=footerHyperlinks href=trackOrdersAdmin.php>View order status</a><br/>";
              }else{
                  echo"<a class=footerHyperlinks href=trackOrders.php>View order status</a><br/>";
              }

              if($_SESSION["session1"]=="admin"){
                  echo"<a class=footerHyperlinks href=modifyOrderStatus.php>Modify order status</a><br/>";
              }

            }

          echo"</div>";

          echo"<div class=footerLeftSubDiv>";
            echo"<p class=footerHeadings href=#>About us</p>";
            echo"<a class=footerHyperlinks href=SenthuranCV.php>Senthuran</a><br/>";
            echo"<a class=footerHyperlinks href=GowthamyCV.php>Gowthamy</a><br/>";
            echo"<a class=footerHyperlinks href=SahanaCV.php>Sahana</a><br/>";
            echo"<a class=footerHyperlinks href=ShimakCV.php>Shimak</a><br/>";
          echo"</div>";
         /* echo"<div class=footerRightSubDiv>";
            echo"<p class=footerHeadings>Contact the Editor</p>";
            echo"<a class=footerFonts>Senthuran Ambalavanar</a><br/>";
          echo"</div>";*/
          echo"<br/>";
          echo"<br/>";
          echo"<br/>";

          //echo"<div class=footerCopyrightDiv>";
          if(isset($_SESSION["session1"])){
            //echo"<div class=footerCopyrightDiv style=margin-left:20px;margin-right:20px>";
            echo"<div class=footerCopyrightDiv style=margin-left:1.6%;margin-right:1.6%>";
          }else{
            echo"<div class=footerCopyrightDiv style=margin-left:10.5%;margin-right:10.5%>";
            //echo"<div class=footerCopyrightDiv style=margin-left:7.1%;margin-right:7.1%>";
          }
            //echo"<div class=footerHrDiv>";
              echo"<br/>";
              echo"<br/>";
              echo"<br/>";
              echo"<hr class=footerHr>";
            //echo"</div>";
            echo"<a class=footerCopyrightFonts>&copy; 2016 MidField, Inc. All Rights Reserved &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a class=footerCopyrightLinks href=siteMap.php>Site Map</a>";
            if($pageEditor=="senthuran"){
              echo"<a class=footerCopyrightLinks style=float:right href=SenthuranCV.php>Senthuran Ambalavanar </a><br/>";
            }else if($pageEditor=="gowthamy"){
              echo"<a class=footerCopyrightLinks style=float:right href=GowthamyCV.php>Gowthamy Vaseekaran </a><br/>";
            }else if($pageEditor=="sahana"){
              echo"<a class=footerCopyrightLinks style=float:right href=SahanaCV.php>Sahana Sivaraj </a><br/>";
            }else if($pageEditor=="shimak"){
              echo"<a class=footerCopyrightLinks style=float:right href=ShimakCV.php>Shimak Ahamed </a><br/>";
            }else{

            }
            
          echo"</div>";
          
          
          
			?>
			 


		</div>

		
	</div>
</div>
</footer>
