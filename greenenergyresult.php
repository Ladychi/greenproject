<!DOCTYPE html>
<html>
<head>
	<title>Green Energy Input form</title>
		<meta charset="UTF-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="bootstrip/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrip/style/style.css" rel="stylesheet">
</head>
<body id="body1">

<div class="container">

				<div class="row">
				
					<div class="span2">
					</div>
					
					<div class="span8">
						<h2>The Building Energy consumption<hr /></h2>
						<?php
								  $building_size = $_POST['budsize'];
								  $temperature = $_POST['temp'];
								  $date = $_POST['date'];
								  $city = $_POST['city'];
								  $energy_class = $_POST['energyclass'];
								  $commercial_heating = $_POST['commercialsheating'];
								  $commercial_lightening = $_POST['commerciallightening'];
								  $commercial_waterheating = $_POST['commercialwaterheating'];
								  $commercial_cooking = $_POST['commercialcooking'];
								  $commercial_cooling = $_POST['commercialcooling'];
								  $commercial_others = $_POST['commercialothers'];
								  
								  $kwcommercial_heating = $commercial_heating/1000;
								  $kwcommercial_lightening = $commercial_lightening/1000;
								  $kwcommercial_waterheating = $commercial_waterheating/1000;
								  $kwcommercial_cooking = $commercial_cooking/1000;
								  $kwcommercial_cooling = $commercial_cooling/1000;
								  $kwcommercial_others = $commercial_others/1000;
								  
								  $total = $kwcommercial_heating + $kwcommercial_lightening + $kwcommercial_waterheating + 
								  $kwcommercial_cooking + $kwcommercial_cooling + $kwcommercial_others;
								  
								  $kwtotal = $total / 3600;
								 
								  echo  '<p>Building size = '. $building_size . ' meter cube(m3) </p><hr/>';
								  echo  '<p>Temperature = '. $temperature . ' centigrade</p> <hr/>';
								  echo  '<p>Date = '. $date . '</p><hr/>';
								  echo  '<p>city = '. $city . '</p><hr/>';
								  echo  '<p>The Energy class of the building  = '. $energy_class  . '</p><hr/>';
								  echo  '<p>The heating of the building per kilowatts  = '. $commercial_heating . ' watts</p><hr/>';
								  echo  '<p>The lightening of the building per kilowatts  = '. $commercial_lightening . ' watts</p> <hr/>';
								  echo  '<p>The water heating of the building per kilowatts  = '. $commercial_waterheating . ' watts</p> <hr/>';
								  echo  '<p>The cooking of the building per kilowatts  = '. $commercial_cooking . ' watts</p> <hr/>';
								  echo  '<p>The cooling of the building per kilowatts  = '. $commercial_cooling . ' watts </p><hr/>';
								  echo  '<p>Other energy consumption in the building per kilowatts  = '. $commercial_others . ' watts </p><hr/>';
								  echo  '<p><b>The total Energy consumed by the ' . $energy_class . ' in kilowatts/m3  = '. $total . 'kilowatts</b></p><hr/>';
								   echo  '<p><b>The total Energy consumed by the ' . $energy_class . ' in kilowatts/hour  = '.$kwtotal. ' kilowatts/hour</b></p><hr/>';
						
						?>
						<a href = "greenenergy.html">Click:Back To Energy page</a>
					</div>
					
					<div class="span2">
					</div>
				
				</div>
				
</div>
				
</body>
</html>