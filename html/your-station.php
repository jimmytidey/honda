<?
require_once('db_functions.php'); 

if (isset($_POST['origin'])) { 

	$origin = addslashes($_POST['origin']);
	$destination = addslashes($_POST['destination']);
	if (!empty($_POST['journey_reason'])) {$journey_reason = addslashes($_POST['journey_reason']);}
	else {$journey_reason = '0';}
	$duration = addslashes($_POST['duration']);
	if (!empty($_POST['lastfm_id'])) { $lastfm_id = addslashes($_POST['lastfm_id']);}
	else { $lastfm_id = '0';}
	if (!empty($_POST['tracks'])) {$tracks = addslashes(htmlspecialchars_decode($_POST['tracks']));}
	else {$tracks = '0';}

	$name = addslashes($_POST['name']);					
	$departure_time = time();
	$arrival_time = time() + $_POST['duration'] * 3600; 
	$query = "INSERT INTO users (lastfm_id, name, journey_reason, playlist, departure_time, arrival_time, origin, destination) VALUES ('$lastfm_id', '$name', '$journey_reason', '$tracks', '$departure_time', '$arrival_time', '$origin', '$destination')";

	db_q($query);
}

?>


<!DOCTYPE html>

<html>
<head>

	<meta charset=utf-8 />


	<title>HereTrumpet</title> 

	<link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
	
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.min.js"></script>
	
	<script type='text/javascript' src='script/station.js' ></script>
	
	<script type="text/javascript" src="http://cdn.pubnub.com/pubnub-3.1.min.js"></script>
	
	<script type="text/javascript" src='http://heresay.org.uk/api/js/mapstraction.js'></script>
	

	
</head> 

<body>

	<div pub-key="pub-3935e335-b4d7-4c1d-a53f-9902f8d18cb5" sub-key="sub-3cb83317-12c2-11e1-ae8f-cd58960bee98" ssl="off" origin="pubsub.pubnub.com" id="pubnub"></div>
	
	<div id='container'>
    	<h1>HereTrumpet</h1>
		
		<div id='left_column'>
			<div id='userlist_container'>
				<h2>Companions</h2> 
			
				<div id='userlist'>

				</div>
			</div>
		

		<div id='playlist_container'>
			<h2>Your shared playlist</h2>
			<div id='playlist'>

			</div>
		</div>
		</div>
		
		<div id='right_column' >
			
			<div id='now_playing'>
				<h3><strong>NOW PLAYING:</strong> The Pogues</h3>
				<p>Note: The Pogues were founded in King's Cross</p>
				<input type='submit' class='big_button' value='Like'  /> <br/>
				<input type='submit' class='big_button' value='skip'  />
				
			</div>
						
			<div id='recommend'>
				<label>What would you like to suggest to your companions?</label>
				
				<input type='text' id='suggest' />
				
				<p> [ SEARCH FOR MUSIC OR SPOKEN WORD (eg. English Heritage podcasts )]</p>
				
					<input type='submit' class='big_button' value='suggest!'  />
			</div>
		</div>
		
	</div>

</body>
</html>

