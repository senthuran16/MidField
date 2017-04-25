<!DOCTYPE html>
<html>
<head>
    <title>MidField | Home</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <script src="js-image-slider.js" type="text/javascript"></script>
</head>
<body>
<?php
$thisPage="home"; //This is to highlight the current page in red
include("WebsiteHeader.php");
?>
<a style="font-size:104%">&nbsp;</a><br/>
    <div id="sliderFrame">
        <div id="slider">
            <img src="Images/Banners/ace-focus.png">
            <img src="Images/Banners/shine-guard.png">
            <img src="Images/Banners/adidas.png">
            <img src="Images/Banners/bar-vs-real.png">
            <img src="Images/Banners/real-atletico.png">
            <img src="Images/Banners/nike-wal.png">
        </div>
    </div>
    <!-- <div class="contentCenterDiv" style ="align:center">
        <h2>WELCOME TO MIDFIELD</h2>
        <p>This web page Mid-Field was created according to web tech course work specification.
        Theme of page is Football. Latest football wears are available . Users can view products details , vote for poll.
        Answer Quiz. User should sign up for purchase goods . A signed up user has all privileges.
        </p>
    </div> -->

<!-- <a style="font-size:200%">&nbsp;</a><br/> -->
<?php
    $pageEditor="shimak"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php")
?>
</body>
</html>
