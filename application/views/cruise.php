<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css" />
<link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.4/mapbox.css' rel='stylesheet' />
<link href="<?php echo base_url(); ?>css/map.css" rel="stylesheet">

<script src="http://d3js.org/d3.v3.min.js" type="text/javascript"></script>
<script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js"></script>
<script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.4/mapbox.js'></script>

<div class="container inner">
    <div class="container">
		<h1>Cruise!!!</h1>
    </div>
    <div id="map" class="container"></div>
	<div class="cruise-clock container" style="padding-top: 15px"></div>
</div>

<script>
	var date  = new Date(2015, 0, 18, 21, 0, 0);
	var now   = new Date();
	var diff  = date.getTime() / 1000 - now.getTime() / 1000;

	var clock = $('.cruise-clock').FlipClock(diff, {
		clockFace: 'DailyCounter',
		countdown: true
	});
</script>

<script src="<?php echo base_url(); ?>js/map.js"></script>