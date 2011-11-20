<!DOCTYPE html>

<html>
<head>

	<meta charset=utf-8 />


	<title>Jimmy Tidey</title> 

	<link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
	
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.min.js"></script>

  	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAtMGi9FIBTgJEO7_c1ZK0JRT2yXp_ZAY8_ufC3CFXhHIE1NvwkxQzNGXo5BiYmSbnJ18mxJIrw9AhGg" type="text/javascript"></script>
	
	<script src='http://heresay.org.uk/api/js/mapstraction.js'></script>
	
	<script type='text/javascript' src='script/script.js' ></script>
	
	<script src="http://cdn.pubnub.com/pubnub-3.1.min.js"></script>
	

	
</head> 

<body>

	<div pub-key="pub-3935e335-b4d7-4c1d-a53f-9902f8d18cb5" sub-key="sub-3cb83317-12c2-11e1-ae8f-cd58960bee98" ssl="off" origin="pubsub.pubnub.com" id="pubnub"></div>
	
	<div id='container'>
    	<h1 id='title'>Citizen Band Radio</h1>
		
		<h2>Journey start</h2>
		
		<form method='post' action='your-station.php' >
			
			<label for='origin'>Starting From&nbsp;</label><input type='text' id='origin' name='origin' >	
			<div id='start_map' class='journey_map' ></div>
		
			<h2>Journey end</h2>
			<label for='detination'>Destination&nbsp;</label><input type='text' id='destination' name='destination' >	
			<div id='end_map' class='journey_map' ></div>
		
			<h2>Details</h2>
		
			<label for='duration'>Estimated journey duration&nbsp;</label>
			<select id='duration' name='duration' >
				<option value='0.5'>30 mins</option>
				<option value='1'>1 hour</option>
				<option value='1.5'>1.5 hours</option>
				<option value='2'>2 hours</option>									
				<option value='3'>3 hours</option>
				<option value='4'>4 hours</option>
				<option value='5'>5 hours</option>									
			</select>
		
			<br/><br/>
		
			<label for='name'>User name&nbsp;</label><input type='text' id='name' name='name' >
		
			<br />
		
			<label for='journey_reason'>Care to share the reason for your journey?</label>
			<textarea name='journey_reason' id='journey_reason' ></textarea>		
			<br /><br /> 
		
			<input type='submit' id='your_station_link' value='Get on the road...' />
		
		</form>
		
	</div>

</body>
</html>
