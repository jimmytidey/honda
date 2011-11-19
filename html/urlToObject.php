<?

function urlToObject($url) 
{
	//echo $url;
	
	$ch = curl_init(); 	
	
	// set URL to download
	curl_setopt($ch, CURLOPT_URL, $url);
	
	// user agent:
	curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
	
	// remove header? 0 = yes, 1 = no 
	curl_setopt($ch, CURLOPT_HEADER, 0);
	
	// should curl return or print the data? true = return, false = print
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	// timeout in seconds
	curl_setopt($ch, CURLOPT_TIMEOUT, 100);
	
	// download the given URL, and return output
	$output = curl_exec($ch);
	
	$movies = new SimpleXMLElement($xmlstr);

	//print_r($movies); 
	
	$return = $simpleXML;
	
	return $return;

}


function urlToText($url) 
{
	//echo $url;
	
	$ch = curl_init(); 	
	
	// set URL to download
	curl_setopt($ch, CURLOPT_URL, $url);
	
	// user agent:
	curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
	
	// remove header? 0 = yes, 1 = no 
	curl_setopt($ch, CURLOPT_HEADER, 0);
	
	// should curl return or print the data? true = return, false = print
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	// timeout in seconds
	curl_setopt($ch, CURLOPT_TIMEOUT, 500);
	
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
	
	// download the given URL, and return output
	$output = curl_exec($ch);
	
	return $output;

}


?>