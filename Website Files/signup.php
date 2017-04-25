<!DOCTYPE html>
<html>
<head>

<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="Style.css">
<script src="JSScriptJSNav.js"></script>
</head>


<body>

<?php
$thisPage="other"; //This is to highlight the current page in red
include("WebsiteHeader.php");
?>
<br/><br/><br/>


<script>

function confirmPassword(){
  if (form1.txtPassword.value != form1.txtConfirmPassword.value){
  	// Following is to prevent writing to database when
  	// Password & Confirmations don't match with each others
  	form1.hiddenPasswordConfirmation.value = "false";
    alert("Confirmation of password doesn't match. Please re-check");
  }else{
  	form1.hiddenPasswordConfirmation.value = "true";
  }
}



</script>




<div class="contentDiv">

  

  <h2 style="font-size:200%" class="fontBlue">Sign Up</h2>
  <p>Become a member of our community and shop with us!</br></p>
  <br/><a style="font-size:80%" class=hyperlink href=login.php>Already have an account? Login</a>
  <br/><br/><br/>
</div>

<div class="contentDiv">

  <form method="POST" name="form1" action="signupAction.php">
    <a class="formText" id="formText">Full Name <font color="red">*</font></a><br/>
    <input type="text" name="txtFullName" id="txtFullName" size="50" required></br></br>
    <a class="formText" id="formText">Username <font color="red">*</font></a><br/>
    <input type="text" name="txtUsername" id="txtUsername" size="50" required></br></br>
    <a class="formText" id="formText">Password <font color="red">*</font></a><br/>
    <input type="password" name="txtPassword" id="txtPassword" size="50" required></br></br>

    <a class="formText" id="formText">Confirm Password <font color="red">*</font></a><br/>
    <input type="password" name="txtConfirmPassword" id="txtConfirmPassword" size="50" required></br></br>

    <!-- The following is to confirm whether the two passwords match or not -->
    <input type="hidden" name="hiddenPasswordConfirmation" value="false">

    <a class="formText" id="formText">Address <font color="red">*</font></a><br/>
    <input type="text" name="txtAddress" id="txtDepartment" size="50" required></br></br>
    <a class="formText" id="formText">Email Address <font color="red">*</font></a><br/>
    <input type="email" name="txtEmailAddress" id="txtEmailAddress" size="50" required></br></br></br>
    <button type="reset" class="commonButton">Clear</button>
    <input type="submit" value="Register" class="commonButton" name="btnRegister" onclick="confirmPassword()">
  </form>
</div>

</br>

<br/><br/><br/><br/><br/><br/>

<?php
    $pageEditor="senthuran"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php")
?>
</body>


</html>