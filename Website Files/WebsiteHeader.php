<link rel="stylesheet" type="text/css" href="Style.css">
<header>
<div class="navigationBarContainerDiv">

	<br/>

	<div class="navigationBarFonts" bgcolor="#0d0d0d">

		<!-- LOGO ONLY -->
		<div class="navigationBarLogoContainer">
		<img  width=90 src="Images/Logos/siteLogoLight.png">
		</div>

		<div class="logosContainerDiv" >
			
			<?php
  				session_start();
  				if(isset($_SESSION["session1"])){
    				//echo"<div class=loggedInUserDiv><p align=right>".$_SESSION["session1"]."</p></div>";
  					echo"<div class=notLoggedInUserDiv >";

    				echo"<a style=font-size:200%> &nbsp;</a>";
    				echo"<a class=navBarUpperText><font class=fontRed style=font-size:14px>".$_SESSION["session1"]." </font></a> <a>&nbsp;&nbsp;&nbsp; </a>";
    				echo"<a class=navBarUpperText href=logout.php>Logout </a>";
    				echo"</div>";
            
  				}else{
    				echo"<div class=notLoggedInUserDiv >";

    				echo"<a style=font-size:200%> &nbsp;</a>";
    				echo"<a class=navBarUpperText href=login.php>Login </a> <a>&nbsp;&nbsp;&nbsp; </a>";
    				echo"<a class=navBarUpperText href=signup.php>Sign Up </a>";
    				echo"</div>";
  				}
			?>
			 


		</div>

		<a style="font-size:30%"> &nbsp;</a>
	 	<ul class="topnav">
  			<li><div style="margin-left:10px;">&nbsp;</div></li>
        <ul>
        <?php
          if($thisPage=="home"){
  			    echo"<li><a class=active href=home.php>HOME</a></li>";
          }else{
            echo"<li><a href=home.php>HOME</a></li>";
          }

          if($thisPage=="cart"){
            echo"<li><a class=active href=ShoppingCartShoes.php>CART</a></li>";
          }else{
            echo"<li><a href=ShoppingCartShoes.php>CART</a></li>";
          }

          if($thisPage=="quiz"){
            echo"<li><a class=active href=quiz.php>QUIZ</a></li>";
          }else{
            echo"<li><a href=quiz.php>QUIZ</a></li>";
          }

          if(isset($_SESSION["session1"])){
            if($thisPage=="poll"){
            echo"<li><a class=active href=pollIndex.php>POLL</a></li>";
            }else{
            echo"<li><a href=pollIndex.php>POLL</a></li>";
            }
          }

          


  			/*<li><a href="#news">CART</a></li>
  			<li><a href="#contact">QUIZ</a></li>
        <li><a href="#contact">POLL</a></li>
  			<li class="icon">
	    		<a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  			</li>*/

        ?>
		</ul>

	</div>
</div>
</header>

<?php
if($thisPage!="home"){
  echo"<br/><br/>";
}
?>
