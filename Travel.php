<?php include('conn/db_connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Matty's Bins!</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/nav.css" />
	<link rel="stylesheet" type="text/css" href="css/header.css" />
	<link rel="stylesheet" type="text/css" href="css/mainSection.css" />
	<link rel="stylesheet" type="text/css" href="css/contact.css" />
	<link rel="stylesheet" type="text/css" href="css/travel.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<?php include('mainNav.php'); ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1>Travel Bin</h1>

				<div>
					<video id="videoplayer" autoplay loop style="width: 98%;">
						<source src="uploads/videos/travelVid1.mp4" alt="Video Not Displayed!">
					</video>
				</div>

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h3>Simulate Your Trip!</h3>
				<form id="travelSearchForm">
					<div class="form-group form-group-sm">
						<select id="travelTypeId" class="form-control form-control-sm">
							<option>Select</option>
							<option class="travelType">Flights</option> <!-- Combine Buses and Trains -->
							<option class="travelType">Cruises</option>
							<option class="travelType">Work Abroad</option> <!-- Volunteer Programs -->
							<option class="travelType">Travel Passes</option> <!-- Euro Pass and more -->
						</select><br /><br /><br />
						<label>TO:</label> <input class="form-control" type="text" name="travelFrom" placeholder="Depart">
						<label>FROM:</label> <input class="form-control" type="text" name="travelTo" placeholder="Arrive">
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="googleMap1" style="width:400px;height:300px;"></div>
					<br>
					<div id="googleMap2" style="width:400px;height:300px;"></div>
					<br>
					<div id="googleMap3" style="width:400px;height:300px;"></div>
					<br>
					<div id="googleMap4" style="width:400px;height:300px;"></div>

					  <script>
					    function myMap() {
					      var mapOptions1 = {
					      center: new google.maps.LatLng(45.2249610,-122.8410340),
					      zoom:9,
					      mapTypeId: google.maps.MapTypeId.ROADMAP,
					      };
					      var mapOptions2 = {
					      center: new google.maps.LatLng(45.2249610,-122.8410340),
					      zoom:9,
					      mapTypeId: google.maps.MapTypeId.SATELLITE,
					      panControl: true,
					      zoomControl: true,
					      mapTypeControl: true,
					      scaleControl: true,
					      streetViewControl: true,
					      overviewMapControl: true,
					      rotateControl: true
					      };
					      var mapOptions3 = {
					      center: new google.maps.LatLng(47.2249610,-121.8410340),
					      zoom:9,
					      mapTypeId: google.maps.MapTypeId.HYBRID
					      };
					      var mapOptions4 = {
					      center: new google.maps.LatLng(47.2249610,-121.8410340),
					      zoom:9,
					      mapTypeId: google.maps.MapTypeId.TERRAIN
					      };
					      var map1 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions1);
					      var map2 = new google.maps.Map(document.getElementById("googleMap2"),mapOptions2);
					      var map3 = new google.maps.Map(document.getElementById("googleMap3"),mapOptions3);
					      var map4 = new google.maps.Map(document.getElementById("googleMap4"),mapOptions4);
					  }
					</script>

					  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC65y9PyvKQuFEx2dK_JqBPlMHExVgEzbI&callback=myMap"></script>
      </div>
    </div>
  </div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div id="flightResults" class="col-sm-12 text-center">
				<h3>Cheapest Flights</h3>
			</div>
		</div>
	</div>
	<?php

		$varTravel = $GLOBALS['resultTravel'];

		while($rowTravel = mysqli_fetch_assoc($varTravel)) {
			$search = array('&quot;', '&lt;', '&gt;');
			$replace = array('"', '<', '>');
			$subject = $rowTravel['affilAdCode'];
			echo str_replace($search, $replace, $subject);
		}

	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="Js/travel.js"></script>
</body>
</html>
<?php mysqli_close($conn); ?>
