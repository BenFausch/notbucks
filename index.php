<!DOCTYPE html>
<?php 
require_once('.private.php');
?>
<html>
	<head>
		<title>Place searches</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<style>
		/* Always set the map height explicitly to define the size of the div
		* element that contains the map. */
		#map {
		height: 100%;
		}
		/* Optional: Makes the sample page fill the window. */
		html, body {
		height: 100%;
		margin: 0;
		padding: 0;
		}
		
		.infoW a{
		text-align: center;
		color: red;
		font-weight: bold;
		font-size: 15px;
		display: block;
		padding-top: 35px;
		padding-left: 21px;
		}
		.rating{
			font-weight:bold;
			font-size:28;
			text-align: center;
		}
		</style>
		<script src="map.js"></script>
	</head>
	<body>
		<div id="map"></div>
		<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GoogleAPISettings::mapsKey; ?>&libraries=places"></script>
	</body>
</html>