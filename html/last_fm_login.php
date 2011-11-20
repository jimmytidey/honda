<?

error_reporting(E_ALL);
ini_set('display_errors', '1');

$api_key = '6a02e719627efa9c150dc51595c9ccb9';
$api_secret = 'f7bbcc6ef14fd79655f09efb14b99316'; 
$callback_url  = urlencode('http://localhost:8888/honda/html/last_fm_login.php');

include('urlToObject.php');

if (empty($_GET['token'])) { // user not logged in, and not being redirected from log in 
	header("Location: http://www.last.fm/api/auth/?api_key=$api_key&cb=$callback_url"); 	
}

if (isset($_GET['token'])) {
	$token = $_GET['token'];
	
	$param1 = "api_key".$api_key; 
	//$param2 = "formatjson";
	$param3 = "methodauth.getSession";
	$param4 = "token".$token;
	$param5 = $api_secret;
	$api_sig = md5($param1.$param3.$param4.$param5);
	
	$url = "http://ws.audioscrobbler.com/2.0/?method=auth.getSession&api_key=$api_key&api_sig=$api_sig&token=$token&format=json";
	$user_json = urlToText($url); 
	$user = json_decode($user_json, true);
	//print_r($user);
	$user_name=$user['session']['name'];
}


//now, get the users shit together 

$url ="http://ws.audioscrobbler.com/2.0/?method=user.gettoptracks&user=$user_name&api_key=$api_key&format=json&limit=10";
$top_tracks_json = htmlspecialchars(urlToText($url));

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
	
	<? if ($_SERVER['HTTP_HOST'] =='localhost:8888') { 
			echo '<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAtMGi9FIBTgJEO7_c1ZK0JRT2yXp_ZAY8_ufC3CFXhHIE1NvwkxQzNGXo5BiYmSbnJ18mxJIrw9AhGg" type="text/javascript"></script>';
		}
		else { 
			echo '<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAtMGi9FIBTgJEO7_c1ZK0JRQ8Umpnz3t-Fc3gMfW6JWnQdyf2aRTlkqBYxHo52jsDDe9n2dQVRfv9kA" type="text/javascript"></script>';
		}
	
	
	?> 
	
	<script src='http://heresay.org.uk/api/js/mapstraction.js'></script>
	
	<script type='text/javascript' src='script/script.js' ></script>
	
	<script src="http://cdn.pubnub.com/pubnub-3.1.min.js"></script>
	
	
</head> 

<body>

	<div pub-key="pub-3935e335-b4d7-4c1d-a53f-9902f8d18cb5" sub-key="sub-3cb83317-12c2-11e1-ae8f-cd58960bee98" ssl="off" origin="pubsub.pubnub.com" id="pubnub"></div>
	
	<div id='container'>
    	<h1>Citizen Band Radio</h1>
		
		<h2>Journey start</h2>
		
		<form method='post' action='your-station.php' >
			<label for='origin'>Starting From&nbsp;</label><input type='text' id='origin' name='origin' />	
			<div id='start_map' class='journey_map' ></div>
		
			<h2>Journey end</h2>
			<label for='destination'>Destination&nbsp;</label><input type='text' id='destination' name='destination' />	
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
						
			<input type='hidden' name='lastfm_id' value="<? echo $user['session']['key'];  ?>"  />	
			
			<input type='hidden' name='name' value="<? echo $user['session']['name'];   ?>"  />

			<input type='hidden' name='tracks' value="<? echo $top_tracks_json  ?>"  />
			
			<label for='journey_reason'>Care to share the reason for your journey?</label>
			<textarea name='journey_reason' id='journey_reason' ></textarea>

			<input type='submit' id ='your_station_link' value='Get on the road...' />
		
		</form>
		
	</div>

</body>
</html>
