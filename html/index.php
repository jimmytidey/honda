<?

/* 
CREATE TABLE `honda`.`users` (
`user_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`lastfm_id` VARCHAR( 10 ) NOT NULL ,
`name` VARCHAR( 50 ) NOT NULL ,
`journey_reason` VARCHAR( 2000 ) NOT NULL ,
`playlist` VARCHAR( 10000 ) NOT NULL ,
`departure_time` VARCHAR( 100 ) NOT NULL ,
`arrival_time` VARCHAR( 100 ) NOT NULL ,
`origin` VARCHAR( 200 ) NOT NULL ,
`destination` VARCHAR( 200 ) NOT NULL
) ENGINE = InnoDB;

*/


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
	
</head> 

<body>
	

	<div pub-key="pub-3935e335-b4d7-4c1d-a53f-9902f8d18cb5" sub-key="sub-3cb83317-12c2-11e1-ae8f-cd58960bee98" ssl="off" origin="pubsub.pubnub.com" id="pubnub"></div>
	
	<div id='container'>
    	<h1 id='title'>Citizen Band Radio</h1>
		
		<h1 class='login_switch'><a href='last_fm_login.php' >I do have a Last.fm account &raquo;</a></h1>

		<h1 class='login_switch'><a href='login.php' >I don't have a Last.fm account &raquo;</a></h1>		
		
	</div>

</body>
</html>
