<?

require_once('db_functions.php'); 

if (!empty($_POST['origin'])) {
	
	$origin = addslashes($_POST['origin']);
	$destination = addslashes($_POST['destination']);
	$journey_reason = addslashes($_POST['journey_reason']);
	$duration = addslashes($_POST['duration']);
	if (!empty($_POST['lastfm_id'])) { $lastfm_id = addslashes($_POST['lastfm_id']);}
	else { $lastfm_id = '';}
	if (!empty($_POST['tracks'])) {$tracks = addslashes($_POST['tracks']);}
	else {$tracks = '';}
	$name = addslashes($_POST['name']);					
	
	$query = "INSERT INTO users (lastfm_id, name, journey_reason, playlist, departure_time, arrival_time, origin, destination) VALUES ()"
	
	echo ($query);
	
	//db_q($query);
	
	
	
}







?>


<!DOCTYPE html>

<html>
<head>

	<meta charset=utf-8 />


	<title>Jimmy Tidey</title> 

	<link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
	
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.min.js"></script>
	
	<script type='text/javascript' src='script/script.js' ></script>
	
	<script src="http://cdn.pubnub.com/pubnub-3.1.min.js"></script>
	
	<script src='http://heresay.org.uk/api/js/mapstraction.js'></script>
	
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

	
</head> 

<body>

	<div pub-key="pub-3935e335-b4d7-4c1d-a53f-9902f8d18cb5" sub-key="sub-3cb83317-12c2-11e1-ae8f-cd58960bee98" ssl="off" origin="pubsub.pubnub.com" id="pubnub"></div>
	
	<div id='container'>
    	<h1>Citizen Band Radio</h1>
		
		
	</div>

</body>
</html>

