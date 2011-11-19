<?

error_reporting(E_ALL);
ini_set('display_errors', '1');

$api_key = '6a02e719627efa9c150dc51595c9ccb9';
$api_secret = 'f7bbcc6ef14fd79655f09efb14b99316'; 
$callback_url  = urlencode('http://localhost:8888/honda/html/your-station.php');


if (empty($_GET['token'])) { // user not logged in, and not being redirected from log in 
	header("Location: http://www.last.fm/api/auth/?api_key=$api_key&cb=$callback_url"); 	
}

if (isset($_GET['token'])) {
	$token = $_GET['token'];
	
	$param1 = "api_key".$api_key; 
	$param2 = "formatjson";
	$param3 = "methodauth.getSession";
	$param4 = "token".$token;
	$param5 = $api_secret;
	$api_sig = md5($param1.$param2.$param3.$param4.$param5);
	
	$url = "http://ws.audioscrobbler.com/2.0/?method=auth.getSession&api_key=$api_key&api_sig=$api_sig&token=$token&format=json";
	$user = urlToText($url); 
	print($user)
}


?>