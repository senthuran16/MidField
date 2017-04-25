<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>Presentation</title>
</head>
<body onload="timer()">

<div class="navigationBarContainerDiv" style="height:900px">

    <br/>
    <p align="center"><img  width=130 src="Images/Logos/siteLogoLight.png"></p>
    
</div>
<div class="loginContentDiv">
            <br/><br/><br/><br/><br/><br/>
            <h3 class="fontRed">Group Members</h3><br/><br/>

            <a class="fontBlack" style="font-size:160%">Senthuran Ambalavanar</h3><br>
            <a class="fontBlack" style="font-size:160%">Gowthamy Vaseekaran</h3><br>
            <a class="fontBlack" style="font-size:160%">Sahana Sivaraj</h3><br>
            <a class="fontBlack" style="font-size:160%">Ahamed Shimak</h3><br>
        </div>



<br/><br/><br/><br/><br/>
<div class="footerContainerDiv">

        
        
    
</div>






</body>
<style>
    @font-face {
        font-family: 'Gotham';
        src: url('fonts/Gotham Bold.otf');
    }
    @font-face {
        font-family: 'Gotham-Light';
        src: url('fonts/Gotham XLight.otf');
    }
    body{
        animation: pulse 2s;
    }
    @keyframes pulse {
        0% {
            background-color: #000000;
        }
        100% {
            background-color: #ffffff;
        }
    }
    .M_Title{
        text-align: center;
        padding-top: 5%;
    }
    h1 {
        color: #000000;
        font-family: Gotham;
        font-size: 120px;
        display:inline;
    }
    h2 {
        color: rgba(0, 0, 0, 0.78);
        font-family: Gotham-Light;
        font-size: 70px;
        display:inline;
    }
    h3 {
        color: rgba(0, 0, 0, 0.66);
        font-family: Gotham-Light;
        font-size: 40px;
        display:inline;
    }
    hr {
        display: block;
        margin-top: 0.5em;
        margin-bottom: 0.5em;
        margin-left: 10%;
        margin-right: 10%;
        border-style: inset;
        border-width: 1px;
        border-color: rgba(0, 0, 0, 0.59);
    }
</style>
<script>
    function timer() {
        var seconds_left = 5;
        var interval = setInterval(function() {
            --seconds_left;

            if (seconds_left == 0)
            {
                //document.write("HELLO")
                location.replace("home.php")
                clearInterval(interval);
            }
        }, 1000);
    }
</script>
</html>