
<!DOCTYPE html>
<html>
<head>
<title>Comments about the Website</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>

<?php
$thisPage="other"; //This is to highlight the current page in red
include("WebsiteHeader.php");
?>

<!-- html part for the comment page layout -->
<div class="contentDiv">

<br/><br/><br/>


<h2 style="font-size:200%" class="fontBlue">Tell us your opinions!</h2>
<p>What's your opinion about our website and our products? We are interested in improving us</br></p>
<br/>

<form method="POST" action="commentsConnectAction.php">


<?php
include("connectToDatabase.php"); 
		if(isset($_SESSION["session1"])){
				// This is a logged in user
				// Name is got from database
				$results=mysqli_query($con,"select fullName from  websiteusers where username = '$_SESSION[session1]' ");
                 while( $rows=mysqli_fetch_array($results))
                {	
                	echo"<a class=formText>Name : </a><br/>";         
    	            echo"<input type=text id=txtName class=formFields name=name value='$rows[fullName]' readonly>";
    	       		echo"<br/><br/>";
    	       	}
    	}else{
    			echo"<a class=formText>Name<font color=red>*</font> : </a><br/>";
				echo"<input type=text id=txtName class=formFields name=name required>";
				echo"<br/>";
				echo"<br/>";
    	}
    	echo"<br/>";
    	//This is for user to select he/ she want to receive updates via email
    	if(isset($_SESSION["session1"])){
    			echo"<input type=checkbox class=formFields checked=true id=commentsFormRatingChkUpdates name=updates value=yes  >&nbsp;";
    			 echo"<a class=formFields> Receive updates via E-mail</a>";
    	}else{
    		 echo"<input type=checkbox class=formFields id=commentsFormRatingChkUpdates name=updates value=yes onchange=dispayEmail()>";
    		 echo"<a class=formFields> Receive updates via E-mail</a>";

		}
		echo"<br/>";
		echo"<br/>";

		//This is for E-mail Field
    	if(isset($_SESSION["session1"])){
				// This is a logged in user
				// Email is got from database
				$results=mysqli_query($con,"select emailAddress from  websiteusers where username = '$_SESSION[session1]'");
                while( $rows=mysqli_fetch_array($results)) 
                {	

                	
                	//echo"</div>";
                	
                	echo"<a class=formText>E-mail : </a><br/>"; 
                	echo"<input type=email id=txtEmail class=formFields placeholder=someone@yourweb.com name=mailId  value='$rows[emailAddress]' ondblclick=productView() readonly >";
    	       		echo"<br/>";
    	       		echo"<br/>"; 
    	       		echo"<a class=formText style=font-size:80%><font class=fontBlue>Double click for more details on how this information is going to be used</font></a>";
					
    	            echo"<br/><br/>";
    	        }
    	}else{
    			// Not logged in user
				// Get inputs from him/her
    			/*echo"<a class=formText>E-mail<font color=red>*</font> : </a><br/>";
				echo"<input type=email id=txtEmail class=formFields placeholder=someone@yourweb.com name=mailId ondblclick=productView() required>";*/
				echo"<div id=mailField>";
				echo"<a class=formText>E-mail : </a><br/>";
					echo"<input type=text id=txtEmail class=formFields placeholder=someone@yourweb.com name=mailId ondblclick=productView() >";
				echo"</div>";
				
				echo"<br/>";
				echo"<a class=formText style=font-size:80%><font class=fontBlue>Double click for more details on how this information is going to be used</font></a>";

				
    	        echo"<br/><br/>";

    	}

    			echo"<a class=formText>Comments <font color=red>*</font>  </a><br/>";
				echo"<textarea rows=4 cols=50 name=comments id=commentsId required></textarea><br/><br/>";

			/*<!--CHANGE THIS WITH CSS STAR WIDGETS LATER-->*/
				echo "<a class=formText>Rating  </a><br/>";
	
	/*<!-- Rating stars -->*/
		echo"<span class=rating>";
        		echo"<input type=radio class=rating-input
            	id=rating-input-1-5 name=rating-input-1 value=5 id=star5 >";
       				echo" <label for=rating-input-1-5 class=rating-star></label>";
        		echo"<input type=radio class=rating-input
            	id=rating-input-1-4 name=rating-input-1 value=4 id=star4>";
        			echo"<label for=rating-input-1-4 class=rating-star></label>";
        		echo"<input type=radio class=rating-input
            	id=rating-input-1-3 name=rating-input-1 value=3 id=star3>";
        			echo"<label for=rating-input-1-3 class=rating-star></label>";
        		echo"<input type=radio class=rating-input
           		 id=rating-input-1-2 name=rating-input-1 value=2 id=start2>";
        			echo"<label for=rating-input-1-2 class=rating-star></label>";
        		echo"<input type=radio class=rating-input
           		 id=rating-input-1-1 name=rating-input-1 value=1 id=star1>";
       		 		echo"<label for=rating-input-1-1 class=rating-star></label>";
    	echo"</span>";
    	



?>

<br/><br/>
			<!-- Button for submit details to the summary popup -->
		<input type="button" class="commonButton" value="Ok"onclick="summaryView()">
			<!-- Clear Form -->
		<input type="reset" class="commonButton" value="Clear">	

 
 <!-- Popup window for displaying summary Details -->
<div id="fade" class="black_overlay" onclick="summaryPopupClose()"></div>

	<div id="mailSummary" class="shoppingCartProductSummaryPopup" >
		
	<br/>
		<div class="mailpopupDetails" id="mailPopup">
			
		<div >
	</div>
			

	</div>
</div>





</form>

</div>

<!--Pop ups-->


<br/><br/><br/>

<br/><br/><br/>
	</div>

	<!-- Pop up for Email Guidance -->

<div id="fade" class="black_overlay"></div>

<div id="mailconfirmation" class="shoppingCartProductSummaryPopup">


	<br/>
		<div class="mailpopupDetails">
			<h3 style="font-size:150%" class="fontBlue">Why is it important?</h3>

			<p> This Email address will be used when we are sending you updates about our website. Make sure you provide your own and functional Email address.<br/>
			<br/>Your Email Address should be something like: <br/><b class="fontRed">someone@yourweb.com</b>


			<!-- <p> The User has to enter his/her own valid & functional email address
			which will be used for sending updates.<br/><br/>Your Email Address should be like this: <b><i>someone@yourweb.com </i></b> -->
  			</p> 
			<br/>

			<input type="button" class="commonButton" value="&nbsp;OK&nbsp;"onclick = "productClose()"></a>

		</div>


</div>

	

<script>

/** This function is used for reviews. If nth star is clicked, 0-(n-1) stars will be checked
*/
function commentStars(){

	var starArray = ["ratingStar1","ratingStar2","ratingStar3","ratingStar4","ratingStar5"];

	for(var i=0 ; i<5 ; i++){
		if(i!=0){
			if(document.getElementById(starArray[i]).checked){

				for(var j=0 ; j<i ; j++){
					document.getElementById(starArray[j]).checked = true;
				}

				
				

			}
		}
	}

}



//Functions for pop-ups
/*Function to view mail instruction popup window*/

function productView(){
		document.getElementById('mailconfirmation').style.display='block';
		document.getElementById('fade').style.display='block';
	}
 /*
 Funtion to close mail instruction popup*/

function productClose(){
		document.getElementById('mailconfirmation').style.display='none';
		document.getElementById('fade').style.display='none';
	}

	/*Funtion to close summary popup window*/

function summaryPopupClose(){
		document.getElementById('mailSummary').style.display='none';
		document.getElementById('fade').style.display='none';
	}

	/*Funtion to view summary pop up window*/

function summaryView(){
			document.getElementById('mailSummary').style.display='block';
			document.getElementById('fade').style.display='block';
			
		

			/*Funtion to show details on the popup window*/
			function showDetails(){
				var name=document.getElementById('txtName').value;
				var mail=document.getElementById('txtEmail').value;
				var comments=document.getElementById('commentsId').value;
				var ratings=getRatings();
				
				
				document.getElementById("mailPopup").innerHTML = ("<h3 style=font-size:150% class=fontBlue>Review Summary</h3>"+"  <b>Name :</b><br/>"+name+"<br/><b> Email :</b><br/>"+mail+"<br/><b>Comments :</b><br/>"+comments+"<br/>"+"<b>Rating : </b>"+ratings+"/5"+"<br/><br/><input type=Submit class=commonButton value=Submit>&nbsp;&nbsp;<input type=button class=commonButton value=Cancel onclick=summaryPopupClose()>");

			}
				return showDetails();
			
			
		}

		

/*	Function to display the rating in popup window*/
function getRatings(){
		if(document.getElementById('commentsFormRatingChkUpdates'.checked=="true")){

		}

			

			var starRadios = ["rating-input-1-1","rating-input-1-2","rating-input-1-3","rating-input-1-4","rating-input-1-5"];

			for(var i=0 ; i<5;i++){
				if(document.getElementById(starRadios[i]).checked){
					return (i+1) ;
				}

			}


	}


/* Function to direct user to type valid mail address or not*/
function dispayEmail(){
	if(document.getElementById("commentsFormRatingChkUpdates").checked==true){
		// Email address box will be displayed
		document.getElementById("mailField").innerHTML =("<a class=formText>E-mail<font color=red>*</font> : </a><br/>"+
														"<input type=email id=txtEmail class=formFields placeholder=someone@yourweb.com name=mailId ondblclick=productView() required>");
	}else{
		// No box will be displayed for acquiring email address
		document.getElementById("mailField").innerHTML =("<a class=formText>E-mail : </a><br/>"+
														"<input type=text id=txtEmail class=formFields placeholder=someone@yourweb.com name=mailId ondblclick=productView()>");

	}
}

</script>

<?php
    $pageEditor="gowthamy"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php")
?>



</body>
</html>

