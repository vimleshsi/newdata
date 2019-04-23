<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">	
    <script type="text/javascript">
function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng(23.259933, -77.412613),
        zoom: 10
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
}	
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
</head>
<body>

<h1>My First Google Map</h1>

<div id="map" style="width:100%;height:550px;">My map will go here</div>

</body>
<html>
