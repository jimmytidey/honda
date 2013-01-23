<?
require_once('db_functions.php'); 

$origin = addslashes($_POST['origin']);
$destination = addslashes($_POST['destination']);
if (!empty($_POST['journey_reason'])) {$journey_reason = addslashes($_POST['journey_reason']);}
else {$journey_reason = '0';}
$duration = addslashes($_POST['duration']);
if (!empty($_POST['lastfm_id'])) { $lastfm_id = addslashes($_POST['lastfm_id']);}
else { $lastfm_id = '0';}
if (!empty($_POST['tracks'])) {$tracks = addslashes(htmlspecialchars_decode($_POST['tracks']));}
else {$tracks = '0';}

	$query = 'SELECT * FROM users';
	$users = db_q($query);  
	
	
	foreach ($users as $user) {
		$name = stripslashes($user['name']);
		$origin = stripslashes($user['origin']);
		$destination = stripslashes($user['destination']);
		$joruney_reason = stripslashes($user['journey_reason']);
												 
		echo "<div class='user_details'><strong>$name</strong> Leaving <em>$origin</em> for <em>$destination</em> ($joruney_reason)</div>";
	}



?>

<h1>Bums</h1>