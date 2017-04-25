<html>
<head>
<title>Locations of our outlets</title>
<!-- <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>   -->
<!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGw5mZQ_Fb8z1jcCX0zp1ndyfdq5dl8F4&callback=initialise">
</script> -->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9W5vcUMbw218MNvlqz0aMx1FiQiW-V6I&callback=initialise">
</script>
</head>
<body onload="initialise();">

<?php
$thisPage="other"; //This is to highlight the current page in red
include("WebsiteHeader.php");
?>
<br/><br/><br/><br/>

<div class="mapContainerDiv" style="width:1380px">
<div class="contentDiv" style="display:block">		
	<div id="map" align="left" style="display:block;margin-left:70px;float:left;height: 400px; width: 500px">	
	</div>
	<div style="float:left;margin-left:40px;margin-top:100px;max-width:390px">
		<h1 class="fontBlack">Living in Europe?</h1>
		<a>Shopping from Europe? worried about delivery charges? We are here to help you! Refer the map for our available outlets in Europe.
		We are hoping to expand our service to the other regions of the world in the near future</a>
	</div>
</div>
</div>

		
	


</div>
<h3></h3>

<script type="text/javascript">
function initialise(){
var locations = [
["<h4>Sri Lanka</h4><p>36, Galle Road, Colombo 06</p>", 6.872497, 79.861838, 3],    
["<h4>France</h4><p>24, Rue de Sevres 75007</p>", 45.067276, 5.459656, 2],
["<h4>Germany</h4><p>67D, Cologne's Shopping Street, Schildergasse</p>", 51.1657, 10.4515, 1]
];
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 2,
center: new google.maps.LatLng(45.8629838,-6.7669772),
mapTypeId: google.maps.MapTypeId.ROADMAP
});
var infowindow = new google.maps.InfoWindow();
var marker, i;
for (i = 0; i < locations.length; i++) {
marker = new google.maps.Marker({
position: new google.maps.LatLng(locations[i][1], locations[i][2]),
map: map
});
google.maps.event.addListener(marker, 'click', (function(marker, i) {
return function() {
infowindow.setContent(locations[i][0]);
infowindow.open(map, marker);
}
})(marker, i));
}
}
</script>

<br/><br/><br/>
<?php
    $pageEditor="senthuran"; //This is to show the page editor's name in footer
    include("WebsiteFooter.php")
?>


</body>
</html>