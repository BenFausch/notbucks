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
		overflow:hidden;
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
		#hola{
  height: 100vh;
  width: 100vw;
  position: absolute;
  top: 0;
  left: 0;
  background-color: fuchsia;
  color: white;
  font-size: 72px;
  line-height: 1.5em;
  z-index: 99999999;
  text-align: center;
  padding-top: 5vw;
  font-family: Helvetica, Arial, sans-serif;
  font-weight: bold;
		}
		#hola img{
			width:200px;
		}
		#hola.hidden{
			display:none!important;
		}
		</style>
		<script src="map.js"></script>
	</head>
	<body>
		<div id="hola">Hola Muchacho<br><small>hold the fuck on</small><br><img src="img/tenor.gif"/></div>
		<div id="map"></div>
		<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GoogleAPISettings::mapsKey; ?>&libraries=places"></script>
	</body>
</html>