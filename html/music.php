<?
	require_once('db_functions.php'); 

	$query = 'SELECT * FROM users';
	$users = db_q($query);  
	
	$total_playlist = array();
	
	foreach ($users as $user) {
	
		if ($user['playlist'] != '0' ) {
			$playlist_json = stripslashes($user['playlist']);
			$playlist = json_decode($playlist_json, true); 
			for ($i=0; $i <10; $i++) {
				$playlist['toptracks']['track'][$i]['user_name'] = $user['name'];
			}
			
			$total_playlist = array_merge($total_playlist, $playlist['toptracks']['track']);
		}
	}
	
	foreach($total_playlist as $track)  { 
		echo $track['artist']['name'] . ' - ' ; 
		echo $track['name'] ." [via ". $track['user_name']. " ] <br/> "; 
	}

?>
